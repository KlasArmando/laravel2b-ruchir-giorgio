@extends('main')

@section('container')
    <h1>Contact</h1>
    <div class="contact">
        <div style="width: 600px"><iframe width="600" height="200" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Posthumalaan%20120%2C%20Rotterdam+(Chrll)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />
        <div class="companyaddress">
            <p>Chrll.</p>
            <p>Posthumalaan 120</p>
            <p>3072AG Rotterdam</p>
            <p>Nederland</p>
        </div>
    </div>
    <form>
        <label for="firstname">Voornaam:</label><input type="text">
        <label for="lastname">Achternaam:</label><input type="text">
        <label for="email">E-mailadres:</label><input type="email">
        <label for="message">Bericht:</label><input type="text">
        <input type="submit" value="Verstuur!" class="submitbtn">
    </form>
@endsection

@section('title')
    Contact
@endsection