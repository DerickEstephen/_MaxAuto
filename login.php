<?php include "lib/header.php" ?>


<section>
    <div class="container py-16">
        <div class="rounded border shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)] px-8 py-8 w-2/5 mx-auto">
            <h3 class="text-[4vw] leading-tight text-db font-semibold mb-8 text-center">Login</h3>
            <form method="post">
                <div class="flex items-center gap-3 border px-4 py-3 rounded shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)] mb-3">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <input type="email" name="email" placeholder="Enter Email Address" class="w-full outline-none" required>
                </div>
                <div class="flex items-center gap-3 border px-4 py-3 rounded shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)] mb-3">
                    <i class="fa-solid fa-lock text-xl"></i>
                    <input type="password" id="password" name="password" placeholder="Enter Password" class="w-full outline-none" required>
                    <i class="fa-solid fa-eye text-xl" id="eye" onclick="toggle()"></i>
                </div>
                <div class="text-end mb-8"> <a href="#" class="text-sm hover:underline">Forget Password?</a> </div>
                <div class="flex flex-col justify-center mb-5">
                    <input type="submit" name="submit_btn" value="Login" class="cursor-pointer text-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy">
                    <div class="relative my-5">
                        <p class="relative z-[2] mx-auto bg-white max-w-max px-1 font-medium">OR</p>
                        <p class="border-b border-gray-400 w-full absolute z-[1] top-[50%] translate-y-[-50%]"></p>
                    </div>
                    <div class="flex gap-5">
                        <a href="#" class="w-full flex gap-2 items-center justify-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><span class="fab fa-google"></span> google </a>
                        <a href="#" class="w-full flex gap-2 items-center justify-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><span class="fab fa-facebook-f"></span> facebook </a>
                    </div>
                </div>
                <div class="text-center"><a href="signup.php" class="text-sm hover:underline" >Don't have an Account?</a></div>
            </form>
        </div>
    </div>
</section>

<script>
    let state = true;

    function toggle() {
        if (state) {
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").style.color = '#130f40';
            state = false;
        } else {
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").style.color = '#518ecb';
            state = true;
        }
    }
</script>

<?php include "lib/footer.php" ?>