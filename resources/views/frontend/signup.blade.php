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
    
    <section class="bg cover bg-cover pb-10">
        <div class="flex justify-between pt-4 px-4 ">
            <div >
                <a href="{{ route('index') }}"><img class="xl:h-[100px] md:w-[250px]" src="{{ asset("frontend/images/gp-logo.png") }}" alt="" srcset=""></a>
            </div>
            <div>
                <img class="xl:[100px] md:w-[250px]" src="{{ asset("frontend/images/cholo-bangladesh.png") }}" alt="" srcset="">
            </div>
        </div>
        
        <div class="flex justify-center items-center flex-col rounded-lg border-4 xl:mx-[20%] lg:mx-[20%] md:mx-[20%] mx-[10%] pb-20 p-10">
            <h1 class="text-[38px] text-center mb-4">Registraion Form</h1>
            @if (session('status'))
            <div class="alert alert-error my-4" role="alert">
                {{ session('status') }}
            </div>
            @endif
           <form action="{{ route('register-users') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="নাম*" name="name" required class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="number" placeholder="মোবাইল নম্বর*" required name="phone_number" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="email" placeholder="ইমেইল আইডি* " required name="email" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <label class="label">
                <span class="label-text text-lg">জন্ম তারিখ:</span>
              </label>
            <input type="date" placeholder="জন্ম তারিখ" required name="data_of_birth" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="text" placeholder="জাতীয় পরিচয় নম্বর/ পাসপোর্ট নম্বর" required name="NID_number" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <label class="label">
                <span class="label-text text-lg">জাতীয় পরিচয়/ পাসপোর্ট এর ছবি:</span>
              </label>
            <input type="file" placeholder="জাতীয় পরিচয়/ পাসপোর্ট এর ছবি" required name="NID_photo" class="file-input file-input-bordered file-input-accent w-full max-w-xs mb-3" /><br>
            <input type="text" placeholder="ফেসবুক আইডি" name="fb_id" class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="text" placeholder="পেশা" name="occupation" required class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            <input type="text" placeholder="ঠিকানা" name="address" required class="input input-bordered input-accent w-full max-w-xs mb-3" /><br>
            
            <label class="label">
                <span class="label-text text-lg" >নিবন্ধঙ্কারির ছবি:</span>
              </label>
            <input type="file" placeholder="নিবন্ধঙ্কারির ছবি" required name="user_photo" class="file-input file-input-bordered file-input-accent w-full max-w-xs" />
            <button type="submit" class="button mt-7">Register</button>

           </form>

        </div>
    </section>

</body>
</html>