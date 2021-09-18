{{--
    <meta name="viewport" content="width=device-width, initial-scale=1">  --}}

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- CSRF Token -->

{{--
    <title>{{ config('app.name', 'found-tutor') }}</title>
<!--Start of Tawk.to Script-->  --}}

@extends('layouts.Front.Front_layout')
@section('content')

    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}
     <style>
.button {

  border: none;

  padding: 2px 8px;
  text-align: center;
  text-decoration:none;
  text-decoration-style: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white;
 color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
  text-decoration:none;
}

.button3 {
  background-color: white;
  color: black;
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
  text-decoration:none;
}
</style>
<style>
     .navbar {
  min-height: 73px;
}
</style>

 <div id="app">



      <div class="container ">
          <br><br><br><br><br><br><br>
           <div class="row justify-content-center">
               <div class="col-md-8">
           <div class="card ">
                <div class="card-header" style="background-color:#008CBA;color:white">{{ __('Register') }}</div>

                <div class="card-body mt-sm-5">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

<div class="form-group row">
                             <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Select any one') }}</label>
                             <div class="col-md-6">
                                 <select id="usertype" type="text" style="background-color:#b8e8f787" class="form-control" name="usertype" value="{{ old('usertype') }}"  required autocomplete="usertype" >
                                    <option value="" selected disabled>Select any one</option>
                                    <option value="teacher" >Select as teacher</option>
                                    <option value="student"  >Select as student</option>

                                 </select>
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="lightcolor"  style="background-color:#b8e8f787" type="text"  class="form-control @error('name')  is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Enter your Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

   <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Select City') }}</label>

                            <div class="col-md-6">

          <select id="single" type="text" style="background-color:#b8e8f787" name="city" value="{{ old('city') }}" required autocomplete="city" class="js-states form-control" >
 <option value="0" selected disabled>Select City</option>
<option value="Karachi">Karachi</option>
<option value="Lahore">Lahore</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Multan">Multan</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Peshawar">Peshawar</option>
<option value="RahimYarKhan">RahimYarKhan</option>
<option value="Quetta">Quetta</option>
<option value="Muzaffarabad">Muzaffarabad</option>
<option value="Battagram">Battagram</option>
<option value="Kotli">Kotli</option>
<option value="Islamabad">Islamabad</option>
<option value="Bahawalpur">Bahawalpur</option>
<option value="Sargodha">Sargodha</option>
<option value="Sialkot">Sialkot</option>
<option value="Sukkur">Sukkur</option>
<option value="Larkana">Larkana</option>
<option value="Shekhupura">Shekhupura</option>
<option value="Bhimbar">Bhimbar</option>
<option value="Jhang">Jhang</option>
<option value="Sadr">Sadr</option>
<option value="Gujrat">Gujrat</option>
<option value="Mardan">Mardan</option>
<option value="MalirCantonment">MalirCantonment</option>
<option value="Kasur">Kasur</option>
<option value="Mingora">Mingora</option>
<option value="DeraGhaziKhan">DeraGhaziKhan</option>
<option value="Sahiwal">Sahiwal</option>
<option value="Nawabshah">Nawabshah</option>
<option value="Okara">Okara</option>
<option value="MirpurKhas">MirpurKhas</option>
<option value="Chiniot">Chiniot</option>
<option value="Shahkot">Shahkot</option>
<option value="Kamoke">Kamoke</option>
<option value="Saddiqabad">Saddiqabad</option>
<option value="Burewala">Burewala</option>
<option value="Jacobabad">Jacobabad</option>
<option value="Muzaffargarh">Muzaffargarh</option>
<option value="Muridke">Muridke</option>
<option value="Jhelum">Jhelum</option>
<option value="Shikarpur">Shikarpur</option>
<option value="Hafizabad">Hafizabad</option>
<option value="Kohat">Kohat</option>
<option value="Khanpur">Khanpur</option>
<option value="Khuzdar">Khuzdar</option>
<option value="Dadu">Dadu</option>
<option value="Gojra">Gojra</option>
<option value="Mandi">Mandi</option>
<option value="Bahauddin">Bahauddin</option>
<option value="Tando">Tando</option>
<option value="Allahyar">Allahyar</option>
<option value="Daska">Daska</option>
<option value="Kalan">Kalan</option>
<option value="Pakpattan">Pakpattan</option>
<option value="Bahawalnagar">Bahawalnagar</option>
<option value="Bahawalnagar">Bahawalnagar</option>
<option value="Tando">Tando</option>
<option value="Adam">Adam</option>
<option value="Khairpur">Khairpur</option>
<option value="Mirs">Mirs</option>
<option value="Chishtian">Chishtian</option>
<option value="Abbottabad">Abbottabad</option>
<option value="Jaranwala">Jaranwala</option>
<option value="Ahmadpur">Ahmadpur</option>
<option value="East">East</option>
<option value="Vihari">Vihari</option>
<option value="Kamalia">Kamalia</option>
<option value="Kot">Kot</option>
<option value="Addu">Addu</option>
<option value="Khushab">Khushab</option>
<option value="Wazirabad">Wazirabad</option>
<option value="Dera">Dera</option>
<option value="Ismail">Ismail</option>
<option value="Khan">Khan</option>
<option value="Chakwal">Chakwal</option>
<option value="Swabi">Swabi</option>
<option value="Lodhran">Lodhran</option>
<option value="Nowshera">Nowshera</option>
<option value="Cantonment">Cantonment</option>
<option value="Charsadda">Charsadda</option>
<option value="Jalalpur">Jalalpur</option>
<option value="Jattan">Jattan</option>
<option value="Mianwali">Mianwali</option>
<option value="Chaman">Chaman</option>
<option value="Kandhkot">Kandhkot</option>
<option value="Hasilpur">Hasilpur</option>
<option value="Arifwala">Arifwala</option>
<option value="Mianke">Mianke</option>
<option value="Mor">Mor</option>
<option value="Attock">Attock</option>
<option value="City">City</option>
<option value="Chichawatni">Chichawatni</option>
<option value="Bhakkar">Bhakkar</option>
<option value="Kharian">Kharian</option>
<option value="Layyah">Layyah</option>
<option value="Kambar">Kambar</option>
<option value="Moro">Moro</option>
<option value="Mian">Mian</option>
<option value="Channun">Channun</option>
<option value="Turbat">Turbat</option>
<option value="Shahdad">Shahdad</option>
<option value="Kot">Kot</option>
<option value="Bhalwal">Bhalwal</option>
<option value="Dipalpur">Dipalpur</option>
<option value="Badin">Badin</option>
<option value="Pano">Pano</option>
<option value="Aqil">Aqil</option>
<option value="Kotri">Kotri</option>
<option value="Tando">Tando</option>
<option value="Muhammad">Muhammad</option>
<option value="Khan">Khan</option>
<option value="Harunabad">Harunabad</option>
<option value="Pattoki">Pattoki</option>
<option value="Chenab">Chenab</option>
<option value="Nagar">Nagar</option>
<option value="Kahror">Kahror</option>
<option value="Pakka">Pakka</option>
<option value="Gujar">Gujar</option>
<option value="Khan">Khan</option>
<option value="Kot">Kot</option>
<option value="Malik">Malik</option>
<option value="Barkhurdar">Barkhurdar</option>
<option value="Chuchar-kana">Chuchar-kana</option>
<option value="Mandi">Mandi</option>
<option value="Toba">Toba</option>
<option value="Tek">Tek</option>
<option value="Singh">Singh</option>
<option value="Narowal">Narowal</option>
<option value="Shorkot">Shorkot</option>
<option value="Shahdadpur">Shahdadpur</option>
<option value="Shabqadar">Shabqadar</option>
<option value="Mansehra">Mansehra</option>
<option value="Shujaabad">Shujaabad</option>
<option value="Haveli">Haveli</option>
<option value="Lakha">Lakha</option>
<option value="Lala">Lala</option>
<option value="Musa">Musa</option>
<option value="Mailsi">Mailsi</option>
<option value="Shakargarh">Shakargarh</option>
<option value="Ghotki">Ghotki</option>
<option value="Sibi">Sibi</option>
<option value="Jampur">Jampur</option>
<option value="Sambrial">Sambrial</option>
<option value="Sanghar">Sanghar</option>
<option value="Hujra">Hujra</option>
<option value="Shah">Shah</option>
<option value="Muqim">Muqim</option>
<option value="Kabirwala">Kabirwala</option>
<option value="Chunian">Chunian</option>
<option value="Sangla">Sangla</option>
<option value="Hill">Hill</option>
<option value="Haripur">Haripur</option>
<option value="Nankana">Nankana</option>
<option value="Sahib">Sahib</option>
<option value="Pasrur">Pasrur</option>
<option value="Gwadar">Gwadar</option>
<option value="Rajanpur">Rajanpur</option>
<option value="Rohri">Rohri</option>
<option value="Zhob">Zhob</option>
<option value="Matli">Matli</option>
<option value="Rawala">Rawala</option>
<option value="Kot">Kot</option>
<option value="Hadali">Hadali</option>
<option value="Mirpur">Mirpur</option>
<option value="Mathelo">Mathelo</option>
<option value="Bannu">Bannu</option>
<option value="Dullewala">Dullewala</option>
<option value="Hala">Hala</option>
<option value="Ratodero">Ratodero</option>
<option value="Jatoi">Jatoi</option>
<option value="Shimali">Shimali</option>
<option value="Jauharabad">Jauharabad</option>
<option value="Bat">Bat</option>
<option value="Khela">Khela</option>
<option value="Kot">Kot</option>
<option value="Radha">Radha</option>
<option value="Kishan">Kishan</option>
<option value="Kahna">Kahna</option>
<option value="Nau">Nau</option>
<option value="Mustafabad">Mustafabad</option>
<option value="Chak">Chak</option>
<option value="Thirty-one">Thirty-one</option>
<option value="-Eleven">-Eleven</option>
<option value="Left">Left</option>
<option value="Talagang">Talagang</option>
<option value="Taunsa">Taunsa</option>
<option value="Thatta">Thatta</option>
<option value="Sarai">Sarai</option>
<option value="Alamgir">Alamgir</option>
<option value="Usta">Usta</option>
<option value="Muhammad">Muhammad</option>
<option value="Kamra">Kamra</option>
<option value="Umarkot">Umarkot</option>
<option value="Basirpur">Basirpur</option>
<option value="Sehwan">Sehwan</option>
<option value="Naushahra">Naushahra</option>
<option value="Virkan">Virkan</option>
<option value="Fort">Fort</option>
<option value="Abbas">Abbas</option>
<option value="Havelian">Havelian</option>
<option value="Khairpur">Khairpur</option>
<option value="Dinga">Dinga</option>
<option value="Ladhewala">Ladhewala</option>
<option value="Waraich">Waraich</option>
<option value="Khalabat">Khalabat</option>
<option value="New">New</option>
<option value="Badah">Badah</option>
<option value="Tank">Tank</option>
<option value="Kot">Kot</option>
<option value="Mumin">Mumin</option>
<option value="Tandlianwala">Tandlianwala</option>
<option value="Chak">Chak</option>
<option value="Azam">Azam</option>
<option value="Sahu">Sahu</option>
<option value="Loralai">Loralai</option>
<option value="Jalalpur">Jalalpur</option>
<option value="Pirwala">Pirwala</option>
<option value="Pabbi">Pabbi</option>
<option value="Chak">Chak</option>
<option value="Jhumra">Jhumra</option>
<option value="Sahiwal">Sahiwal</option>
<option value="Renala">Renala</option>
<option value="Khurd">Khurd</option>
<option value="Risalpur">Risalpur</option>
<option value="Cantonment">Cantonment</option>
<option value="Lakki">Lakki</option>
<option value="Topi">Topi</option>
<option value="Hangu">Hangu</option>
<option value="Pir">Pir</option>
<option value="Jo">Jo</option>
<option value="Goth">Goth</option>
<option value="Kundian">Kundian</option>
<option value="Pir">Pir</option>
<option value="Mahal">Mahal</option>
<option value="Khurrianwala">Khurrianwala</option>
<option value="Mehrabpur">Mehrabpur</option>
<option value="Pindi">Pindi</option>
<option value="Bhattian">Bhattian</option>
<option value="Malakwal">Malakwal</option>
<option value="City">City</option>
<option value="Narang">Narang</option>
<option value="Mandi">Mandi</option>
<option value="Malakwal">Malakwal</option>
<option value="Thul">Thul</option>
<option value="Pindi">Pindi</option>
<option value="Gheb">Gheb</option>
<option value="Zahir">Zahir</option>
<option value="Pir">Pir</option>
<option value="Dunyapur">Dunyapur</option>
<option value="Gambat">Gambat</option>
<option value="Kashmor">Kashmor</option>
<option value="Alipur">Alipur</option>
<option value="Naudero">Naudero</option>
<option value="Pasni">Pasni</option>
<option value="Sukheke">Sukheke</option>
<option value="Mandi">Mandi</option>
<option value="Setharja">Setharja</option>
<option value="Old">Old</option>
<option value="Khewra">Khewra</option>
<option value="Mamu">Mamu</option>
<option value="Kanjan">Kanjan</option>
<option value="Sharqpur">Sharqpur</option>
<option value="Sharif">Sharif</option>
<option value="Digri">Digri</option>
<option value="Bhera">Bhera</option>
<option value="Sakrand">Sakrand</option>
<option value="Tando">Tando</option>
<option value="Jam">Jam</option>
<option value="Raiwind">Raiwind</option>
<option value="Lalian">Lalian</option>
<option value="Khairpur">Khairpur</option>
<option value="Tamewah">Tamewah</option>
<option value="Kharan">Kharan</option>
<option value="Mehar">Mehar</option>
<option value="Khangah">Khangah</option>
<option value="Dogran">Dogran</option>
<option value="Khairpur">Khairpur</option>
<option value="Nathan">Nathan</option>
<option value="Shah">Shah</option>
<option value="Upper">Upper</option>
<option value="Dir">Dir</option>
<option value="Ghauspur">Ghauspur</option>
<option value="Tangi">Tangi</option>
<option value="Utmanzai">Utmanzai</option>
<option value="Thal">Thal</option>
<option value="Minchianabad">Minchianabad</option>
<option value="Garh">Garh</option>
<option value="Maharaja">Maharaja</option>
<option value="Jahanian">Jahanian</option>
<option value="Shah">Shah</option>
<option value="Mastung">Mastung</option>
<option value="Mananwala">Mananwala</option>
<option value="Fazilpur">Fazilpur</option>
<option value="Talamba">Talamba</option>
<option value="Kunjah">Kunjah</option>
<option value="Jhawarian">Jhawarian</option>
<option value="Nasirabad">Nasirabad</option>
<option value="Nushki">Nushki</option>
<option value="Sita">Sita</option>
<option value="Road">Road</option>
<option value="Dijkot">Dijkot</option>
<option value="Sillanwali">Sillanwali</option>
<option value="Kandiaro">Kandiaro</option>
<option value="Zaida">Zaida</option>
<option value="Kunri">Kunri</option>
<option value="Kalat">Kalat</option>
<option value="Daud">Daud</option>
<option value="Khel">Khel</option>
<option value="Mitha">Mitha</option>
<option value="Tiwana">Tiwana</option>
<option value="Hazro">Hazro</option>
<option value="City">City</option>
<option value="Dunga">Dunga</option>
<option value="Bunga">Bunga</option>
<option value="Aman">Aman</option>
<option value="Garh">Garh</option>
<option value="Karor">Karor</option>
<option value="Kot">Kot</option>
<option value="Diji">Diji</option>
<option value="Kalur">Kalur</option>
<option value="Kot">Kot</option>
<option value="Murree">Murree</option>
<option value="Faqirwali">Faqirwali</option>
<option value="Ahmadpur">Ahmadpur</option>
<option value="Sial">Sial</option>
<option value="Phalia">Phalia</option>
<option value="Yazman">Yazman</option>
<option value="Raja">Raja</option>
<option value="Jang">Jang</option>
<option value="Chak">Chak</option>
<option value="Five">Five</option>
<option value="Hundred">Hundred</option>
<option value="Seventy-five">Seventy-five</option>
<option value="Pishin">Pishin</option>
<option value="Chak">Chak</option>
<option value="One">One</option>
<option value="Hundred">Hundred</option>
<option value="Twenty">Twenty</option>
<option value="Nine">Nine</option>
<option value="Left">Left</option>
<option value="Chawinda">Chawinda</option>
<option value="Ubauro">Ubauro</option>
<option value="Mithi">Mithi</option>
<option value="Akora">Akora</option>
<option value="Zafarwal">Zafarwal</option>
<option value="Kot">Kot</option>
<option value="Samaba">Samaba</option>
<option value="Eminabad">Eminabad</option>
<option value="Kahuta">Kahuta</option>
<option value="Ranipur">Ranipur</option>
<option value="Kulachi">Kulachi</option>
<option value="Khanpur">Khanpur</option>
<option value="Mahar">Mahar</option>
<option value="Hingorja">Hingorja</option>
<option value="Naukot">Naukot</option>
<option value="Pind">Pind</option>
<option value="Dadan">Dadan</option>
<option value="Khan">Khan</option>
<option value="Kanganpur">Kanganpur</option>
<option value="Faruka">Faruka</option>
<option value="Kotli">Kotli</option>
<option value="Loharan">Loharan</option>
<option value="Shahpur">Shahpur</option>
<option value="Chakar">Chakar</option>
<option value="Talhar">Talhar</option>
<option value="Pad">Pad</option>
<option value="Idan">Idan</option>
<option value="Kot">Kot</option>
<option value="Ghulam">Ghulam</option>
<option value="Muhammad">Muhammad</option>
<option value="Qadirpur">Qadirpur</option>
<option value="Ran">Ran</option>
<option value="Bela">Bela</option>
<option value="Surkhpur">Surkhpur</option>
<option value="Dhoro">Dhoro</option>
<option value="Naro">Naro</option>
<option value="Khangarh">Khangarh</option>
<option value="Sarai">Sarai</option>
<option value="Naurang">Naurang</option>
<option value="Gharo">Gharo</option>
<option value="Bhit">Bhit</option>
<option value="Shah">Shah</option>
<option value="Matiari">Matiari</option>
<option value="Dhanot">Dhanot</option>
<option value="Warah">Warah</option>
<option value="Lachi">Lachi</option>
<option value="Baddomalhi">Baddomalhi</option>
<option value="Jand">Jand</option>
<option value="Chak">Chak</option>
<option value="Two">Two</option>
<option value="Hundred">Hundred</option>
<option value="Forty-nine">Forty-nine</option>
<option value="Thal">Thal</option>
<option value="Development">Development</option>
<option value="Authority">Authority</option>
<option value="Dera">Dera</option>
<option value="Bugti">Bugti</option>
<option value="Tharu">Tharu</option>
<option value="Shah">Shah</option>
<option value="Naushahro">Naushahro</option>
<option value="Firoz">Firoz</option>
<option value="Dajal">Dajal</option>
<option value="Daur">Daur</option>
<option value="Bhopalwala">Bhopalwala</option>
<option value="Paharpur">Paharpur</option>
<option value="Bhan">Bhan</option>
<option value="Mach">Mach</option>
<option value="Goth">Goth</option>
<option value="Radhan">Radhan</option>
<option value="Uthal">Uthal</option>
<option value="Kaleke">Kaleke</option>
<option value="Mandi">Mandi</option>
<option value="Jiwani">Jiwani</option>
<option value="Johi">Johi</option>
<option value="Chhor">Chhor</option>
<option value="Mangla">Mangla</option>
<option value="Bhawana">Bhawana</option>
<option value="Shahr">Shahr</option>
<option value="Sultan">Sultan</option>
<option value="Jhol">Jhol</option>
<option value="Sodhri">Sodhri</option>
<option value="Kalabagh">Kalabagh</option>
<option value="Sinjhoro">Sinjhoro</option>
<option value="Kamar">Kamar</option>
<option value="Mushani">Mushani</option>
<option value="Kallar">Kallar</option>
<option value="Kahar">Kahar</option>
<option value="Chuhar">Chuhar</option>
<option value="Jamali">Jamali</option>
<option value="Harnoli">Harnoli</option>
<option value="Sarai">Sarai</option>
<option value="Sidhu">Sidhu</option>
<option value="Choa">Choa</option>
<option value="Saidan">Saidan</option>
<option value="Shah">Shah</option>
<option value="Dadhar">Dadhar</option>
<option value="Darya">Darya</option>
<option value="Khan">Khan</option>
<option value="Daira">Daira</option>
<option value="Din">Din</option>
<option value="Panah">Panah</option>
<option value="Garhiyasin">Garhiyasin</option>
<option value="Madeji">Madeji</option>
<option value="Dokri">Dokri</option>
<option value="Sobhodero">Sobhodero</option>
<option value="Dalbandin">Dalbandin</option>
<option value="Daulatpur">Daulatpur</option>
<option value="Bhag">Bhag</option>
<option value="Rasulnagar">Rasulnagar</option>
<option value="Chak">Chak</option>
<option value="Shahpur">Shahpur</option>
<option value="Tando">Tando</option>
<option value="Bago">Bago</option>
<option value="Baffa">Baffa</option>
<option value="Karak">Karak</option>
<option value="Garhi">Garhi</option>
<option value="Khairo">Khairo</option>
<option value="Lakhi">Lakhi</option>
<option value="Gadani">Gadani</option>
<option value="Surab">Surab</option>
<option value="Rojhan">Rojhan</option>
<option value="Ormara">Ormara</option>
<option value="Chamber">Chamber</option>
<option value="Kalaswala">Kalaswala</option>
<option value="Islamkot">Islamkot</option>
<option value="Liliani">Liliani</option>
<option value="Bhiria">Bhiria</option>
<option value="Mirwah">Mirwah</option>
<option value="Gorchani">Gorchani</option>
<option value="Dhaunkal">Dhaunkal</option>
<option value="Daultala">Daultala</option>
<option value="Diplo">Diplo</option>
<option value="Kohlu">Kohlu</option>
<option value="Harnai">Harnai</option>
<option value="Jandiala">Jandiala</option>
<option value="Sher">Sher</option>
<option value="Khan">Khan</option>
<option value="Daromehar">Daromehar</option>
<option value="Mankera">Mankera</option>
<option value="Sanjwal">Sanjwal</option>
<option value="Miro">Miro</option>
<option value="Khan">Khan</option>
<option value="Gilgit">Gilgit</option>
<option value="Kot">Kot</option>
<option value="Sultan">Sultan</option>
<option value="Khadro">Khadro</option>
<option value="Berani">Berani</option>
<option value="Begowala">Begowala</option>
<option value="Tangwani">Tangwani</option>
<option value="Bozdar">Bozdar</option>
<option value="Wada">Wada</option>
<option value="Jati">Jati</option>
<option value="Rustam">Rustam</option>
<option value="Darya">Darya</option>
<option value="Khan">Khan</option>
<option value="Marri">Marri</option>
<option value="Sohbatpur">Sohbatpur</option>
<option value="Doaba">Doaba</option>
<option value="Mirpur">Mirpur</option>
<option value="Bhtoro">Bhtoro</option>
<option value="Sann">Sann</option>
<option value="Samaro">Samaro</option>
<option value="Barkhan">Barkhan</option>
<option value="Bandhi">Bandhi</option>
<option value="Karaundi">Karaundi</option>
<option value="Mirpur">Mirpur</option>
<option value="Sakro">Sakro</option>
<option value="Adilpur">Adilpur</option>
<option value="Bagarji">Bagarji</option>
<option value="Goth">Goth</option>
<option value="Phulji">Phulji</option>
<option value="Rajo">Rajo</option>
<option value="Khanani">Khanani</option>
<option value="Alik">Alik</option>
<option value="Ghund">Ghund</option>
<option value="Dinan">Dinan</option>
<option value="Bashnoian">Bashnoian</option>
<option value="Wala">Wala</option>
<option value="Jam">Jam</option>
<option value="Sahib">Sahib</option>
<option value="Kandiari">Kandiari</option>
<option value="Kadhan">Kadhan</option>
<option value="Goth">Goth</option>
<option value="Garelo">Garelo</option>
<option value="Nazir">Nazir</option>
<option value="Town">Town</option>
<option value="Khadan">Khadan</option>
<option value="Khak">Khak</option>
<option value="Pithoro">Pithoro</option>
<option value="Duki">Duki</option>
<option value="Nabisar">Nabisar</option>
<option value="Kario">Kario</option>
<option value="Ghanwar">Ghanwar</option>
<option value="Parachinar">Parachinar</option>
​

          </select>


                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="pautocomplete" style="background-color:#b8e8f787" placeholder="Enter a Location by Google..." type="text"  class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="pautocomplete"  style="background-color:#b8e8f787" placeholder="Enter your qualification" type="text"  class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ old('equalification') }}">

                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                             <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                             <div class="col-md-6">
                                 <select id="gender" type="text" style="background-color:#b8e8f787" class="js-states form-control" name="gender" value="{{ old('gender') }}"  required autocomplete="gender" >
                                   <option value="Male" selected >Male</option>
                                     <option value="Female" selected >Female</option>
                                    <option value="0" selected disabled>Select Gender</option>
                                 </select>
                             </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" style="background-color:#b8e8f787" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email"  style="background-color:#b8e8f787" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






{{--
<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Select Subjects') }}</label>  --}}


        {{--  <div class="col-md-6">
<div class="checkbox">
<label>
    <input type="checkbox" id="checkall"> Select All
</label>
</div>
</hr>

<div class=" float-right">
        <div class="checkbox">
            <label><input type="checkbox" class="checkitem" name="english" value="English" class="form-control"> English</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Maths</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Physics</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Chemistry</label>
        </div>

</div>

        <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Computer</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Pak Studies</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" name="urdu"  value="Urdu" class="checkitem" class="form-control"> Urdu</label>
        </div>
          <div class="checkbox">
            <label><input type="checkbox" class="checkitem"> Islamiat</label>
        </div>
    </div>
</div>  --}}
 <div class="form-group moisture_per row" style="display: none;"  >
                            <label for="document" class="col-md-4 col-form-label text-md-right">{{ __('File Upload') }}</label>

                            <div class="col-md-6">
                                <input  style="background-color:#b8e8f787;" type="file" id="document" class="form-control" name="document"  >
                            </div>
                        </div>

   <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="background-color:#b8e8f787" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" style="background-color:#b8e8f787" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>






  <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class=" button button2" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>


</form>
      </div>
    </div></div >
           </div>
        </div>

    </main>


<script >
    $("#checkall").change(function()
    {
         $("input:checkbox").prop("checked",$(this).prop("checked"));
    });
</script>


      <script>
      $("#single").select2({
    placeholder: "Select a state",
    allowClear: false

      });
      $("#gender").select2({

placeholder: "Select a state",
    allowClear: false


      });

       $("#city").select2({

placeholder: "Select a state",
    allowClear: false


      });
    </script>

     <script>
       $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
       });
   </script>


   <script>
       google.maps.event.addDomListener(window, 'load', initialize);

       function initialize() {
           var input = document.getElementById('autocomplete');
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
               $('#latitude').val(place.geometry['location'].lat());
               $('#longitude').val(place.geometry['location'].lng());

            // --------- show lat and long ---------------
              // $("#lat_area").removeClass("d-none");
               //$("#long_area").removeClass("d-none");
           });
       }




    </script>


@endsection
