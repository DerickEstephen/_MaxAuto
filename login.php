<?php include "lib/header.php" ?>


<section>
    <div class="container py-16">
        <h3 class="text-[4vw] leading-tight text-db font-semibold mb-12 text-center">Login</h3>
        <form method="post" class="w-2/5 mx-auto">
            <div class="flex items-center gap-3 border px-4 py-3 rounded shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)] mb-3">
                <i class="fa-solid fa-envelope text-xl"></i>
                <input type="email" name="email" placeholder="Enter Email Address" class="w-full outline-none" required>
            </div>
            <div class="flex items-center gap-3 border px-4 py-3 rounded shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)] mb-3">
                <i class="fa-solid fa-lock text-xl"></i>
                <input type="password" id="password" name="password" placeholder="Enter Password" class="w-full outline-none" required>
                <i class="fa-solid fa-eye text-xl" id="eye" onclick="toggle()"></i>
            </div>
            <p class="flex justify-between"> Forget Password? <a href="#" class="text-sm hover:underline mb-8">Click Here</a> </p>
            <div class="flex flex-col justify-center">
                <input type="submit" name="submit_btn" value="Login" class="cursor-pointer text-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy">
                <div class="relative">
                    <p class="bg-white">OR</p>
                    <hr class="absolute ">
                </div>
                <p>sign in with</p>
                <div class="flex gap-5">
                    <a href="#" class="w-full flex gap-2 items-center justify-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><span class="fab fa-google"></span> google </a>
                    <a href="#" class="w-full flex gap-2 items-center justify-center text-db bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><span class="fab fa-facebook-f"></span> facebook </a>
                </div>
            </div>
            <p> don't have an account <a href="signup.php" id="signup-btn">create one</a> </p>
        </form>
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