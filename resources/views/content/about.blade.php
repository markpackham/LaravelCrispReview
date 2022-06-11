<x-layout>
    <h1>Welcome @auth {{ auth()->user()->name }} @endauth to Crisp Review</h1>
    <h4>Lorem ipsum dolor sit amet.</h4>
    <img class="img_thumbnail crisp_image_mix" src="{{ asset('images/crisp_image_mix.jpg') }}"
        alt="Homepage collection of crisps">
    <h2>About Crisp Review</h2>
    <p>Just an opinionated CRUD based site on crisps. Information reguarding Potatoes and Flavours are created. Info
        reqguarding Companies are added, then Brands associated with Companies a made.
        Then a review of a specific Crisp is given. Each Crisp must have a Flavour and Brand added to it, the only
        fields not required are images of the Crisp, the review description and the review score since these can be
        added later.
    </p>
</x-layout>
