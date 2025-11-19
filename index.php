<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/output.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap");
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Style+Script&display=swap');
    </style>
    <script src="./js/main.js" require></script>
    <html class="scroll-smooth">


    </html>
</head>

<body>

    <header class="fixed top-5 left-0 right-0 flex justify-center z-50">
        <div class="bg-[#101C23] flex justify-between items-center px-6 py-3 w-9/10 rounded-xl border border-white/30 lg:w-7/10 xl:w-6/10 2xl:w-5/10 relative">

            <h2 class="font-[Roboto] text-[#969EAA] text-[20px]">Marouani Yanis</h2>

            <!-- nav Pc -->
            <div class="hidden lg:flex items-center gap-7">
                <a href="#competences" class="font-[Roboto] text-[#969EAA] text-[16px] hover:text-[#74A5FF]">Compétences</a>
                <a href="#projets" class="font-[Roboto] text-[#969EAA] text-[16px] hover:text-[#74A5FF]">Projets</a>
                <div class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#74A5FF]/20 transition-colors duration-200">
                    <a href="#home"><img class="w-6 h-6" src="./images/icones/accueil.png" alt="bouton accueil"></a>
                </div>
            </div>

            <!-- Bouton burger -->
            <button id="menuBtn" class="lg:hidden relative rounded-full hover:bg-[#74A5FF]/20 transition-colors duration-200 p-2">
                <a href="#menuBurger"><img class="w-7" src="./images/icones/menu_burger.png" alt="menu déroulant"></a>
            </button>

            <!-- Menu déroulant mobile -->
            <div id="mobileMenu" class="absolute top-full right-0 bg-[#101C23] border border-white/30 rounded-xl flex flex-col gap-4 py-4 px-6 min-w-[150px] z-50
                            opacity-0 translate-y-2 pointer-events-none transition-all duration-300 ease-in-out lg:hidden">
                <a href="#competences" class="font-[Roboto] text-[#969EAA] text-[18px] hover:text-[#74A5FF]">Compétences</a>
                <a href="#projets" class="font-[Roboto] text-[#969EAA] text-[18px] hover:text-[#74A5FF]">Projets</a>
                <a href="#home" class="font-[Roboto] text-[#969EAA] text-[18px] hover:text-[#74A5FF]">Accueil</a>
            </div>

        </div>
    </header>




    <main>

        <!-- Présentation -->
        <section id="home" class="h-screen bg-[#070B14]">
            <div class="flex flex-col h-screen justify-center items-center gap-8">
                <p class="font-[Roboto] text-[#969EAA] text-[24px]">Salut je m'appelle</p>
                <h1 class="font-[Style_Script] typewriter text-[#74A5FF] text-[64px] lg:text-[96px]">Marouani Yanis</h1>
                <p class="font-[Roboto] text-[#969EAA] text-[24px]">En formation DWWM, Bac+2</p>
                <a class="font-[Roboto] font-bold text-[#74A5FF] text-[24px] bg-[#101C23] px-[18px] py-[15px] rounded-lg transition-transform duration-200 hover:scale-110" href="#competences">Me découvrir</a>
            </div>
        </section>


        <!-- Compétences -->
        <section id="competences" class="bg-[#1D212C] py-12 items-center gap-3 lg:px-12 lg:py-14 ">

            <div class="flex flex-col text-center">
                <h2 class="font-[Style_Script] text-[#74A5FF] text-[56px] text-center">Competences</h2>
                <h3 class="font-[Roboto] text-[#969EAA] text-[20px] pb-9">Compétences techniques :</h3>
            </div>

            <div class="flex flex-col items-center gap-3 lg:flex-row">
                <div class="flex flex-col items-center gap-8 bg-[#0C121B] border border-white/30 rounded-xl w-9/10 py-5 md:w-7/10 lg:h-100 lg:justify-around">
                    <h3 class="font-[Roboto] text-white text-[20px]">Languages de programmations</h3>
                    <div class="flex text-center gap-5">
                        <div class="flex flex-col gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/php.jpg" alt="logo php">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">Php</h3>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/JavaScript.png" alt="logo javascript">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">JavaScript</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-8 bg-[#0C121B] border border-white/30 rounded-xl w-9/10 py-5 md:w-7/10 lg:h-100 lg:justify-around">
                    <h3 class="font-[Roboto] text-white text-[20px]">Developpement Frontend</h3>
                    <div class="flex text-center gap-8">
                        <div class="flex flex-col gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/html.webp" alt="html logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">Html</h3>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/css.webp" alt="css logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">Css</h3>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/tailwind.png" alt="tailwind logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">Tailwind</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-8 bg-[#0C121B] border border-white/30 rounded-xl w-9/10 py-5 md:w-7/10 lg:h-100 lg:justify-around ">
                    <h3 class="font-[Roboto] text-white text-[20px]">Database & Autres</h3>
                    <div class="flex text-center gap-8">
                        <div class="flex flex-col gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/gitHub.png" alt="github logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">GitHub</h3>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/MySQL.png" alt="mysql logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">MySql</h3>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <img class="w-20 h-20 rounded-xl lg:w-24 lg:h-24 transition-transform duration-200 hover:scale-110" src="./images/icones/figma.png" alt="figma logo">
                            <h3 class="font-[Roboto] text-[#969EAA] text-[20px]">Figma</h3>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Projets -->
        <section id="projets" class="bg-[#121621] flex flex-col items-center text-center py-12">

            <div class="flex flex-col gap-12 items-center">
                <h2 class="font-[Style_Script] text-[#74A5FF] text-[56px] text-center">Mes Projets</h2>

                <div class="flex-col w-9/10 py-4 gap-8 flex items-center bg-[#1D212C] border border-white/30 rounded-xl">
                    <div class="flex flex-col gap-3">
                        <h3 class="font-[Roboto] text-[20px] text-white">Social Network</h3>
                        <div class="flex gap-2">
                        <h3 class="font-[Roboto] text-[#c169a2] bg-[#793862]/40 text-[16px] rounded-xl px-3 py-0.5">Php</h3>
                        <h3 class="font-[Roboto] text-[#F0DB4F] bg-[#F0DB4F]/40 text-[16px] rounded-xl px-3 py-0.5">Javascript</h3>
                        <h3 class="font-[Roboto] text-[#3EBFF8] bg-[#3EBFF8]/40 text-[16px] rounded-xl px-3 py-0.5 ">Tailwind</h3>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 items-center lg:w-full lg:h-full lg:flex-row lg:px-8 lg:py-8 lg:items-stretch">
                        <div class="h-55 lg:h-auto w-9/10 lg:w-1/2 lg:flex-1 rounded-xl overflow-hidden relative">
                            <img class="absolute top-0 transition-transform duration-10000 hover:-translate-y-400 lg:hover:-translate-y-600" src="./images/autres/social_network.png" alt="visuel du site Social Network">
                        </div>

                        <div class="bg-[#101C23] border border-white/30 py-10 lg:py-20 px-4 rounded-xl flex flex-col gap-3 items-center w-9/10  lg:justify-between lg:w-1/2">
                            <p class="font-[Roboto] text-[18px] lg:text-[22px] text-white">Un site de réseaux social qui permet aux utilisateurs de poster une photo accompagné d’un message avec un fil d’actualité et une section profil dynamique.</p>
                            <div class="flex flex-col gap-3">
                                <h3 class="font-[Roboto] text-[#969EAA] text-[14px] lg:text-[18px]">Liens :</h3>

                                <div class="flex gap-8">
                                    <a class="hover:bg-[#74A5FF]/20 rounded-full p-2" href="http://" target="_blank" rel="noopener noreferrer"><img class="w-8" src="./images/icones/google.png" alt="lien vers le site"></a>
                                    <a class="hover:bg-[#74A5FF]/20 rounded-full p-2" href="http://" target="_blank" rel="noopener noreferrer"><img class="w-8 " src="./images/icones/gitHub_rond" alt="lien vers le repo githubm:"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

</body>


</html>