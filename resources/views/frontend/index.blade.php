<html lang="en"  data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cholo Bangladesh</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles/index.css') }}?v={{time()}}">
    <link rel="shortcut icon" href="{{ asset("frontend/images/gp-logo") }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg{
            background-image: url('{{ asset("frontend/images/cool-background.png") }}');
            /* background-color: #0f1c70; */
           /* Add the blur effect */
            /* filter: blur(8px);
            -webkit-filter: blur(8px); */

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .title_text{
            color: #FFF;
            text-shadow: 0px 4px 12px rgba(0, 0, 0, 0.25);
            font-family: AgameeI;
            font-style: italic;
            font-weight: 500;
            line-height: normal;
        }
        .count-box-bg{
            background-image: url('{{ asset("frontend/images/count-box.svg") }}');

        }
        
    </style>

    


</head>
<body>
    
    <section class="bg cover lg:h-[800px] ">
        <div class="flex justify-between pt-4 px-4 ">
            <div >
                <a href="{{ route('index') }}"><img class="xl:h-[100px] md:w-[250px]" src="{{ asset("frontend/images/gp-logo.png") }}" alt="" srcset=""></a>

            </div>
            
            <div>
                <img class="xl:[100px] md:w-[250px]" src="{{ asset("frontend/images/cholo-bangladesh.png") }}" alt="" srcset="">
            </div>
        </div>
        <div class="flex justify-center items-center flex-col">
            <div class="title_text xl:text-[48px] md:text-[40px] sm:text-[35px]">
                <h1>কনসার্ট শুরু হতে বাকি আছে....</h1>
            </div>
            {{-- countdown timer --}}
            <div class="countdown1 mt-6 ">
                <div class="ps-4">
                <p class="single_clock" id="clock1">00</p>
                <!-- <p class="single_clock" id="clock1">{days}</p> -->
                <p class="clock_label">
                    <small>দিন</small>
                </p>
                </div>
                <div>
                <p class="single_clock" id="clock2">00</p>
                <!-- <p class="single_clock" id="clock1">{hours}</p> -->
                <p class="clock_label">
                    <small>ঘণ্টা</small>
                </p>
                </div>
                <div>
                <p class="single_clock" id="clock3">00</p>
                <!-- <p class="single_clock" id="clock1">{minutes}</p> -->
                <p class="clock_label">
                    <small>মিনিট</small>
                </p>
                </div>
                <div>
                <p class="single_clock" id="clock4">00</p>
                <!-- <p class="single_clock" id="clock1">{seconds}</p> -->
                <p class="clock_label">
                    <small>সেকেন্ড</small>
                </p>
                </div>
                <div class="shadow"></div>
            </div>
            <div class="flex mt-24 mb-24">
                <a href="{{route('signup')}}" class="pe-4"><button class="button">রেজিস্ট্রেশন</button></a>
                <a href="{{ route('signin') }}"><button class="button">লগ ইন</button></a>
            </div>
        </div>
    </section>


    <script src="{{ asset('frontend/js/counter.js')}}"></script>
</body>
</html>