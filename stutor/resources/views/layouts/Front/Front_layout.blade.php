<!DOCTYPE html>
<html lang="en">
<head>

  <!-- basic -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- site metas -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <title>mind</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <!-- fevicon -->
  <link rel="icon" href="mind/images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="mind/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="mind/css/style.css">
  <!-- Responsive-->
<script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="mind/css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  {{--  <link rel="stylesheet" href="mind/css/jquery.mCustomScrollbar.min.css">  --}}
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
.to-top {
	position: fixed;
	bottom: 90px;
	right: 20px;
	text-decoration: none;
	color: #fff;
	background: #008CBA;
	padding: 10px 20px;
	display: none;
}
.to-top:hover{
	color: #008CBA;
	background: rgb(35, 44, 95);
}

</style>
  <!-- Tweaks for older IEs-->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  --}}




    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">

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

       $("#address").select2({

placeholder: "Select a state",
    allowClear: false



      });


    </script>

{{--
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->  --}}
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605cd43e067c2605c0bc495b/1f1l9q5or';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>


<body class="main-layout">

    <script >
    $("#checkall").change(function()
    {
         $("input:checkbox").prop("checked",$(this).prop("checked"));
    });
</script>



  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="mind/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->

  <header>
    @include('layouts.Front.front_header')

  @if(isset($index)&& $index=="index")
     <section class="slider_section">
<br><br><br>
         <div class="container">


               <form action="{{ url('show') }}"  method="get" style=" color:white;padding-left:40px; padding-top:px;" class="btn btn-dark btn-block" >


        {{--  {{ csrf_field() }}  --}}

            <div class="row">
                <div class="col-lg-12">
                     @if (session('status'))
                        <div class="alert" role="alert" style="background-color: #f44336; color:white" >
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
                    <div class="row">
                         <div class="col-lg-3 col-md-3 col-sm-12 pt-1 ">
                  <select id="address" type="text" autofocus  style="border-radius:  0px;" name="address" class="js-states form-control " placeholder="Enter Address...." required autocomplete="searchphone" autofocus >

                                 <option  value='' selected disabled>Select Address</option>


                            <option>nishat</option>
 <option>aliview</option>
                  </select>
                        </div>
                        <div class="col-lg-3 col-md-3 input-group col-sm-12 pt-1">
                            <select id="city" style="border-radius:  0px;" class="js-states form-control @error('city') is-invalid @enderror"  name="city" >
  @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               <option value="" selected disabled>Select City</option>
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
                            </select>
                        </div>

 <div class="col-lg-3 col-md-3 input-group col-sm-12 pt-1 ">
                            <select id="subject" style="border-radius:  0px;" class="js-states form-control"  name="subject_name"  >

                               <option value="" selected disabled>Select Subject</option>
<option value="Maths,English,Islamiat
">   Maths,English,Islamiat
</option>
<option> English
</option>
<option> ITC
</option>

                            </select>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-2   ">
                    <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-1  " value="Search">
                </div>
                    </div>
                </div>
            </div>
        </form>
         </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12">
                    <div class="text-bg">

                        <br>

                      <h3 style="background-color:rgb(9, 115, 214) ;color:white; padding:4px;"> &nbsp&nbsp&nbspSearch &nbspyour &nbspFavorite &nbspTeacher here...</h3>

                      <h4 style="background-color:rgb(21, 177, 73) ;color:white; margin-top:5px; padding:4px;"> &nbspTOP NOTCH COURSES FROM &nbspTRAINED PROFESSIONALS</h4>

                      <br><br>

                      <a href="#">Read more</a> <a href="#">get a qoute</a>


                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="mind/images/bannerwhite.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Search your Favorite Course here</h1>
                      <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a><a href="#">get a qoute</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="mind/images/imgyellow.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Search your Favorite Course here</h1>
                      <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="mind/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@endif
@yield('content')
</header>


  @if(isset($index)&& $index=="index")
<!-- about  -->

 {{--  @include('layouts.Front.front_about_us')  --}}
<!-- end abouts -->

 @include('layouts.Front.front_ours')

<!-- our -->
<!-- end our -->
<!-- Courses -->
@include('layouts.Front.front_courses')
<!-- end Courses -->

<!-- learn -->

@include('layouts.Front.front_learn')
<!-- end learn -->
<!-- MAKE -->
@include('layouts.Front.front_make')
<!-- end MAKE -->



<!-- contact -->
{{--  @include('layouts.Front.front_contact')  --}}
    <!-- end contact -->
@endif
 <a href="#" class="to-top"><i class="fa fa-chevron-up"></i></a>
    <!--  footer -->
    <footr>

      @include('layouts.Front.front_footer')

          </footr>

          <!-- end footer -->
          <!-- Javascript files-->
          <script >
      $("#subject").select2({
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

       $("#address").select2({

placeholder: "Select a state",
    allowClear: false



      });
    </script>

          <script src="mind/js/jquery.min.js"></script>
          {{--  <script src="mind/js/popper.min.js"></script>  --}}
          <script src="mind/js/bootstrap.bundle.min.js"></script>
          {{--  <script src="mind/js/jquery-3.0.0.min.js"></script>  --}}
          <script src="mind/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="mind/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="mind/js/custom.js"></script>
          <script src="{{url('jss/front.js') }}"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 31.494883637395013,
      lng: 74.3934970919022
    },
  });

  var image = 'mind/images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
    lat: 31.494883637395013,
      lng: 74.3934970919022
    },
    map: map,
    icon: image
  });
}

</script>

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->

<script>
	jQuery(document).ready(function() {
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('.to-top').fadeIn(duration);
			} else {
				jQuery('.to-top').fadeOut(duration);
			}
		});

		jQuery('.to-top').click(function(event) {
			event.preventDefault();
			jQuery('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});

</script>

</body>

</html>
