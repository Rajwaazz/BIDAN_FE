public function store(Request $request): RedirectResponse
{
$validated = $request->validate([
'name' => 'required|string|max:255',
'email' => 'required|string|email|max:255|unique:users',
'address' => 'required|string|max:255',
'gender' => 'required|in:L,P',
'birthDate' => 'required|date',
'password' => 'required|string|min:8|confirmed',
'g-recaptcha-response' => 'required|recaptcha',
]);

$otp = str_pad(rand(0, 9999), 6, '0', STR_PAD_LEFT);

Otp::create([
'email' => $validated['email'],
'otp' => $otp,
'expired_at' => now()->addMinute(10),
]);

$request->session()->put('register_data', $validated);

try {
$this->sendOTPEmail($validated['email'], $otp);
} catch (\Exception $e) {
// Rollback OTP creation
Otp::where('email', $validated['email'])->delete();

// Clear session data
$request->session()->forget('register_data');

// Redirect back with error
return redirect()->back()
->withInput($request->except('password', 'password_confirmation'))
->with('error', 'Failed to send OTP. Please try again.');
}

return redirect()->route('showotp')->with('success', 'OTP send for your email');
}

public function showOTP()
{
return view('showotp');
}

public function verifyOTP(Request $request)
{
$request->validate([
'otp' => 'required|numeric',
]);

// Add a null check and provide a more robust error handling
$registerData = $request->session()->get('register_data');
if (!$registerData) {
// Clear any existing session data and redirect
$request->session()->flush();
return redirect()->route('register')
->with('error', 'Registration session expired. Please start over.');
}

// Ensure all required keys exist before accessing them
if (!isset($registerData['email'])) {
return redirect()->route('auth.register')
->with('error', 'Invalid registration data');
}

$otpRecord = Otp::validOTP($registerData['email'], $request->otp)->first();
if (!$otpRecord) {
return back()->with('error', 'Invalid OTP or Session ended');
}

// Additional null checks
$name = $registerData['name'] ?? '';
$email = $registerData['email'] ?? '';
$password = $registerData['password'] ?? '';

if (empty($email) || empty($password)) {
return redirect()->route('auth.register')
->with('error', 'Incomplete registration data');
}

$user = User::create([
'name' => $name,
'email' => $email,
'address' => $registerData['address'],
'gender' => $registerData['gender'],
'birthDate' => $registerData['birthDate'],
'password' => bcrypt($password),
'role' => 'user'
]);

$otpRecord->update(['verified' => true]);
$request->session()->forget('register_data');

return redirect()->route('login')->with('success', 'Registration Successful');
}

private function sendOTPEmail($email, $otp)
{
Mail::raw("Kode OTP Anda Adalah: $otp", function ($message) use ($email) {
$message->to($email)->subject('Kode verifikasi OTP');
});
}
}