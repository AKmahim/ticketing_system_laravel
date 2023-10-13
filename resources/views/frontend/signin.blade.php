<html lang="en"  data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cholo Bangladesh</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles/index.css') }}?v={{time()}}">
    <link rel="stylesheet" href="{{ asset('frontend/styles/signup.css') }}?v={{time()}}">


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
            

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        
    </style>

    


</head>
<body>
    
    <section class="bg   h-full">
        <div class="flex justify-between pt-4 px-4 ">
            <div >
                <a href="{{ route('index') }}"><img class="xl:h-[100px] md:w-[250px]" src="{{ asset("frontend/images/gp-logo.png") }}" alt="" srcset=""></a>
            </div>
            <div>
                <img class="xl:[100px] md:w-[250px]" src="{{ asset("frontend/images/cholo-bangladesh.png") }}" alt="" srcset="">
            </div>
        </div>
        
        <div class="flex justify-center items-center flex-col rounded-lg border-4 xl:mx-[25%] lg:mx-[25%] md:mx-[20%] mx-[10%] xl:pb-[50px] lg:pb-[50px] md:pb-[10px] pb-10 mb-10 p-10">
            <h1 class="text-[38px] text-center mb-4">Login</h1>
            @if (session('status'))
            <div class="alert alert-error my-1" role="alert">
                {{ session('status') }}
            </div>
            @endif
           <form action="{{ route('login_logic') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" placeholder="মোবাইল নম্বর*" required name="phone_number" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="email" placeholder="ইমেইল আইডি* " required name="email" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            
            <button type="submit" class="button mt-7">Login</button>

           </form>

        </div>
    </section>

</body>
</html>