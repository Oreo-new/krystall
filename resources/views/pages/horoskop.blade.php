@section('title', 'horoskop' )

<x-app-layout>

    <div class="mt-4">
        <div class="">
            <img class="mx-auto w-1/2 mb-2 lg:w-1/3" src="{{asset('/images/e31ace2a15a7c70645ad83df9ecd43b0_XS.jpg')}}" alt="">
            <p class="text-center text-2xl font-bold">Vannmannen, 20. january - 18 februar</p>
            <p class="text-center my-4 md:text-2xl">I dag den 22. november</p>
            <p class="text-justify leading-7 text-base">Du trives i en lederrolle du naturlig innerhar. Vis initiative og kom med forslag til
                losninger hver gang du foler du har noe a bidra med. Da vil det vaer lett for andre
                og naturlig sette deg inn i lederoppgaver.
            </p>
        </div>
        <div class="table w-full">
            <p class="my-6">Vannmannen</p>
            <table class="w-full border table-auto text-xs sm:text-base">
                <thead>
                    <tr>
                        <th class="border border-black">Karakteristikk</th>
                        <th class="border border-black">Positiv kvalitet</th>
                        <th class="border border-black">Negativ kvalitet</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="border border-black">Uavhengighet</td>
                        <td class="border border-black">Sikker</td>
                        <td class="border border-black">Tilpassnings-uvillighet</td>
                    </tr>
                    <tr>
                        <td class="border border-black font-bold">Egenskap</td>
                        <td class="border border-black font-bold">Element</td>
                        <td class="border border-black font-bold">Lykkefarge</td>
                    </tr>
                    <tr>
                        <td class="border border-black">Fast</td>
                        <td class="border border-black">Luft</td>
                        <td class="border border-black">Bla</td>
                    </tr>
                    <tr>
                        <td class="border border-black font-bold">Blomst</td>
                        <td class="border border-black font-bold">Lykkesten</td>
                        <td class="border border-black font-bold">Lykketall</td>
                    </tr>
                    <tr>
                        <td class="border border-black">Orkide</td>
                        <td class="border border-black">Amethyst</td>
                        <td class="border border-black">2</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="my-4">
            <p class="text-sm text-center leading-6 tracking-tight">
                <strong>Vannmannens personlighet</strong>
                <br>
                Siden du er styrt av Uranus, en planet så besynderlig at dens roterende akse nesten er horisontal og 
                gjør at den roterer sideveis - ulikt andre planeter i solsystemet - er du en sann individualist. Det
                er ikke så mye det at du liker å sjokkere folk med dine særegenheter (ok, vent litt, du liker det!), 
                som det faktum at du må være tro mot deg selv. Alltid intelligent og forutseende ser du på verden med 
                svært unike øyne, og det farger alt du gjør. Sterk og ofte overdrevent selvsikker tror du på å følge 
                dine egne regler. Hvis det irriterer folk, er ikke det ditt problem. Hvis flere mennesker var like 
                selvgående og likevel moralsk oppegående slik som deg, ville verden vært et bedre sted. Du er helt klart 
                en dyp tenker, og ditt tak på livet er formet av de dype konklusjonene du trekker om livets natur
            </p>
        </div>
    </div>

</x-app-layout>