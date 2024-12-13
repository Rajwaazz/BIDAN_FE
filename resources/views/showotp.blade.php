@extends('mylayout')
@section('content')
<div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600">
    <div class="w-full max-w-md">
        <!-- Notifikasi OTP -->
        @if (!empty(session('success')))
        <div class="bg-green-100 text-green-700 px-4 py-3 border border-green-400 rounded-lg text-center mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Form Verifikasi OTP -->
        <div class="bg-white rounded-lg shadow-md">
            <!-- Header Verifikasi OTP -->
            <div class="bg-gradient-to-t from-cyan-500 to-blue-600 text-white text-lg rounded-t-lg font-bold p-4 text-center">
                Verifikasi OTP
            </div>
            <div class="p-6">
                <!-- Tampilkan pesan error jika ada -->
                @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST" action="{{ route('showotp') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="otp" class="block text-gray-700 font-medium mb-2">Masukkan Kode OTP</label>
                        <input
                            type="text"
                            id="otp"
                            name="otp"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            required
                            maxlength="6"
                            placeholder="Masukkan 6 digit kode OTP">
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                        Verifikasi
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection