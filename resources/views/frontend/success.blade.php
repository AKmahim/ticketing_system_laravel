<html lang="en"  data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cholo Bangladesh</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles/index.css') }}?v={{time()}}">

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
        <div>
            
        </div>
        <div class="flex justify-center items-center flex-col ">
           <a href="{{ route('view-ticket') }}" class="button w-[300px] mb-7 text-center">View Ticket</a>
           <button class="button w-[300px] mb-7 text-center">Donwload Ticket</button>
        </div>
    </section>


    
</body>
</html>