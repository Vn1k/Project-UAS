@vite(['resources/css/app.css','resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    @extends('layouts.appUser')
    @section('content')
    <div class="w-screen font-kanit mt-28 mb-28 px-10">
        <div class="flex flex-col items-center">
            <h1 class="text-xl lg:text-3xl font-bold py-10 text-center">Kuitansi: {{ substr($supporter->nama, 0, 1) . str_repeat('*', max(strlen($supporter->nama) - 1, 0)) }} </h1>
            <div class="p-5 mb-5 rounded backdrop-blur-sm bg-ijo">
                <p class="text-center">Donasi kamu sudah berhasil di proses!</p>
                <p>Terima kasih atas donasi yang telah diberikan!</p>
            </div>

            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="items-center justify-between mb-4">
                    <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white text-center">KUITANSI</h3>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-dashed divide-black">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        ID:
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $supporter->id }}
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Waktu:
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $supporter->tanggal }}
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Nama:
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ substr($supporter->nama, 0, 1) . str_repeat('*', max(strlen($supporter->nama) - 1, 0)) }}
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Jenis Donasi:
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $supporter->donasi }}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="text-center mt-5">
                    Kembali ke beranda dalam <span id="timer"></span> detik.
                </div>
            </div>
            <!-- <center><a href="{{ route('generate-pdf', ['id' => $supporter->id]) }}" class="btn">Buat Kuitansi</a></center> -->

        </div>
    </div>
    @endsection
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set the duration of the timer in seconds
            var timerDuration = 15; // Adjust this value as needed

            // Function to update the timer display
            function updateTimerDisplay() {
                document.getElementById('timer').innerText = timerDuration;
            }

            // Function to handle the timer countdown
            function startTimer() {
                updateTimerDisplay();
                var timerInterval = setInterval(function () {
                    timerDuration--;

                    if (timerDuration <= 0) {
                        // Redirect to the home page when the timer reaches zero
                        window.location.href = '{{ url('/') }}';
                        clearInterval(timerInterval);
                    } else {
                        updateTimerDisplay();
                    }
                }, 1000); // Update every second (1000 milliseconds)
            }

            // Start the timer immediately when the page is loaded
            startTimer();
        });
    </script>
</body>

</html>