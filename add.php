<?php include('includes/header.php');?>
<?php
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}
?>
<div class="container">
<div id="result"></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <form method="post" id="addTrip">
                    <h3 class="text-info">Ajouter un trajet</h3>
                    <hr>
                    <!--<div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="map">

                            </div>
                        </div>    
                    </div> 
                    <hr> -->
                        <div class="form-group">
                            <label for="from">Départ:</label>
                            <select class="form-control" name="from" id="from" required>
                                                   <option value="" disabled selected>--- Ville du départ ---</option>
                                                   <option value="Agadir">Agadir</option>
                                                   <option value="Agdez">Agdez</option>
                                                   <option value="Ahfir">Ahfir</option>
                                                   <option value="Ain Dfali">Ain Dfali</option>
                                                   <option value="Ait Melloul">Ait Melloul</option>
                                                   <option value="Al Hoceima">Al Hoceima</option>
                                                   <option value="Azrou">Azrou</option>
                                                   <option value="Bejaad">Bejaad</option>
                                                   <option value="Beni Ensar">Beni Ensar</option>
                                                   <option value="Beni Mathar">Beni Mathar</option>
                                                   <option value="Beni Mellal">Beni Mellal</option>
                                                   <option value="Fkih Ben Salah">Fkih Ben Salah</option>
                                                   <option value="Berkane">Berkane</option>
                                                   <option value="Bouarfa">Bouarfa</option>
                                                   <option value="Boujdour">Boujdour</option>
                                                   <option value="Boumalne">Boumalne</option>
                                                   <option value="Casablanca">Casablanca</option>
                                                   <option value="Chefchaouen">Chefchaouen</option>
                                                   <option value="Dakhla">Dakhla</option>
                                                   <option value="Dardara">Dardara</option>
                                                   <option value="Driouch">Driouch</option>
                                                   <option value="El hajeb">El Hajeb</option>
                                                   <option value="Eljadida">Eljadida</option>
                                                   <option value="Errachidia">Errachidia</option>
                                                   <option value="Essaouira">Essaouira</option>
                                                   <option value="Fes">Fes</option>
                                                   <option value="Figuig">Figuig</option>
                                                   <option value="Fnidek">Fnidek</option>
                                                   <option value="Goulmima">Goulmima</option>
                                                   <option value="Guelmim">Guelmim</option>
                                                   <option value="Ifrane">Ifrane</option>
                                                   <option value="Imzouren">Imzouren</option>
                                                   <option value="Inzegane">Inzegane</option>
                                                   <option value="Jbel Al-Aroui">Jbel Al-Aroui</option>
                                                   <option value="Jorf el malha">Jorf El Malha</option>
                                                   <option value="Kasbat Tadla">Kasbat Tadla</option>
                                                   <option value="Kassita">Kassita</option>
                                                   <option value="Kelaa Magouna">Kelaat Magouna</option>
                                                   <option value="Kelaa Sraghna">Kelaa Sraghna</option>
                                                   <option value="Khemisset">Khemisset</option>
                                                   <option value="Khenifra">Khenifra</option>
                                                   <option value="Khouribga">Khouribga</option>
                                                   <option value="Ksar El Kébir">Ksar El Kébir</option>
                                                   <option value="Ktama Issaguen">Ktama Issaguen</option>
                                                   <option value="Laayoune">Laayoune</option>
                                                   <option value="Larache">Larache</option>
                                                   <option value="Marrakech">Marrakech</option>
                                                   <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                                                   <option value="Meknes">Meknes</option>
                                                   <option value="Midar">Midar</option>
                                                   <option value="Midelt">Midelt</option>
                                                   <option value="Mirleft">Mirleft</option>
                                                   <option value="Mrirt">Mrirt</option>
                                                   <option value="Nador">Nador</option>
                                                   <option value="Oualidia">Oualidia</option>
                                                   <option value="Ouarzazate">Ouarzazate</option>
                                                   <option value="Ouazzane">Ouazzane</option>
                                                   <option value="Oued Zem">Oued Zem</option>
                                                   <option value="Oujda">Oujda</option>
                                                   <option value="Ouled Teima">Ouled Teima</option>
                                                   <option value="Rabat">Rabat</option>
                                                   <option value="Rich">Rich</option>
                                                   <option value="Rissani">Rissani</option>
                                                   <option value="Safi">Safi</option>
                                                   <option value="Saidia">Saidia</option>
                                                   <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                                                   <option value="Sidi Bennour">Sidi Bennour</option>
                                                   <option value="Sidi Ifni">Sidi Ifni</option>
                                                   <option value="Sidi Kacem">Sidi Kacem</option>
                                                   <option value="Smara">Smara</option>
                                                   <option value="Souk Larbaa">Souk Larbaa</option>
                                                   <option value="Tafraout">Tafraout</option>
                                                   <option value="Taliouine">Taliouine</option>
                                                   <option value="Tamegroute">Tamegroute</option>
                                                   <option value="Tamelelt">Tamelelt</option>
                                                   <option value="Tan Tan">Tan Tan</option>
                                                   <option value="Tanger">Tanger</option>
                                                   <option value="Taounate">Taounate</option>
                                                   <option value="Targuist">Targuist</option>
                                                   <option value="Taroudant">Taroudant</option>
                                                   <option value="Taza">Taza</option>
                                                   <option value="Tata">Tata</option>
                                                   <option value="Tetouan">Tetouan</option>
                                                   <option value="Tiflet">Tiflet</option>
                                                   <option value="Tighssaline">Tighssaline</option>
                                                   <option value="Tinghir">Tinghir</option>
                                                   <option value="Tinjdad">Tinjdad</option>
                                                   <option value="Tinzouline">Tinzouline</option>
                                                   <option value="Tiznit">Tiznit</option>
                                                   <option value="Zagora">Zagora</option>
                                                   <option value="Zaouit Echeikh">Zaouit Echeikh</option>
                        </select>

                        </div>
                        <div class="form-group">
                            <label for="to" class="">Destination:</label>
                            <select class="form-control" name="to" id="to" required>
                                                   <option value="" disabled selected>--- Ville d'arrivée ---</option>
                                                   <option value="Agadir">Agadir</option>
                                                   <option value="Agdez">Agdez</option>
                                                   <option value="Ahfir">Ahfir</option>
                                                   <option value="Ain Dfali">Ain Dfali</option>
                                                   <option value="Ait Melloul">Ait Melloul</option>
                                                   <option value="Al Hoceima">Al Hoceima</option>
                                                   <option value="Azrou">Azrou</option>
                                                   <option value="Bejaad">Bejaad</option>
                                                   <option value="Beni Ensar">Beni Ensar</option>
                                                   <option value="Beni Mathar">Beni Mathar</option>
                                                   <option value="Beni Mellal">Beni Mellal</option>
                                                   <option value="Fkih Ben Salah">Fkih Ben Salah</option>
                                                   <option value="Berkane">Berkane</option>
                                                   <option value="Bouarfa">Bouarfa</option>
                                                   <option value="Boujdour">Boujdour</option>
                                                   <option value="Boumalne">Boumalne</option>
                                                   <option value="Casablanca">Casablanca</option>
                                                   <option value="Chefchaouen">Chefchaouen</option>
                                                   <option value="Dakhla">Dakhla</option>
                                                   <option value="Dardara">Dardara</option>
                                                   <option value="Driouch">Driouch</option>
                                                   <option value="El hajeb">El Hajeb</option>
                                                   <option value="Eljadida">Eljadida</option>
                                                   <option value="Errachidia">Errachidia</option>
                                                   <option value="Essaouira">Essaouira</option>
                                                   <option value="Fes">Fes</option>
                                                   <option value="Figuig">Figuig</option>
                                                   <option value="Fnidek">Fnidek</option>
                                                   <option value="Goulmima">Goulmima</option>
                                                   <option value="Guelmim">Guelmim</option>
                                                   <option value="Ifrane">Ifrane</option>
                                                   <option value="Imzouren">Imzouren</option>
                                                   <option value="Inzegane">Inzegane</option>
                                                   <option value="Jbel Al-Aroui">Jbel Al-Aroui</option>
                                                   <option value="Jorf el malha">Jorf El Malha</option>
                                                   <option value="Kasbat Tadla">Kasbat Tadla</option>
                                                   <option value="Kassita">Kassita</option>
                                                   <option value="Kelaa Magouna">Kelaat Magouna</option>
                                                   <option value="Kelaa Sraghna">Kelaa Sraghna</option>
                                                   <option value="Khemisset">Khemisset</option>
                                                   <option value="Khenifra">Khenifra</option>
                                                   <option value="Khouribga">Khouribga</option>
                                                   <option value="Ksar El Kébir">Ksar El Kébir</option>
                                                   <option value="Ktama Issaguen">Ktama Issaguen</option>
                                                   <option value="Laayoune">Laayoune</option>
                                                   <option value="Larache">Larache</option>
                                                   <option value="Marrakech">Marrakech</option>
                                                   <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                                                   <option value="Meknes">Meknes</option>
                                                   <option value="Midar">Midar</option>
                                                   <option value="Midelt">Midelt</option>
                                                   <option value="Mirleft">Mirleft</option>
                                                   <option value="Mrirt">Mrirt</option>
                                                   <option value="Nador">Nador</option>
                                                   <option value="Oualidia">Oualidia</option>
                                                   <option value="Ouarzazate">Ouarzazate</option>
                                                   <option value="Ouazzane">Ouazzane</option>
                                                   <option value="Oued Zem">Oued Zem</option>
                                                   <option value="Oujda">Oujda</option>
                                                   <option value="Ouled Teima">Ouled Teima</option>
                                                   <option value="Rabat">Rabat</option>
                                                   <option value="Rich">Rich</option>
                                                   <option value="Rissani">Rissani</option>
                                                   <option value="Safi">Safi</option>
                                                   <option value="Saidia">Saidia</option>
                                                   <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                                                   <option value="Sidi Bennour">Sidi Bennour</option>
                                                   <option value="Sidi Ifni">Sidi Ifni</option>
                                                   <option value="Sidi Kacem">Sidi Kacem</option>
                                                   <option value="Smara">Smara</option>
                                                   <option value="Souk Larbaa">Souk Larbaa</option>
                                                   <option value="Tafraout">Tafraout</option>
                                                   <option value="Taliouine">Taliouine</option>
                                                   <option value="Tamegroute">Tamegroute</option>
                                                   <option value="Tamelelt">Tamelelt</option>
                                                   <option value="Tan Tan">Tan Tan</option>
                                                   <option value="Tanger">Tanger</option>
                                                   <option value="Taounate">Taounate</option>
                                                   <option value="Targuist">Targuist</option>
                                                   <option value="Taroudant">Taroudant</option>
                                                   <option value="Taza">Taza</option>
                                                   <option value="Tata">Tata</option>
                                                   <option value="Tetouan">Tetouan</option>
                                                   <option value="Tiflet">Tiflet</option>
                                                   <option value="Tighssaline">Tighssaline</option>
                                                   <option value="Tinghir">Tinghir</option>
                                                   <option value="Tinjdad">Tinjdad</option>
                                                   <option value="Tinzouline">Tinzouline</option>
                                                   <option value="Tiznit">Tiznit</option>
                                                   <option value="Zagora">Zagora</option>
                                                   <option value="Zaouit Echeikh">Zaouit Echeikh</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="price" class="">Prix par passager:</label>
                            <input class="form-control" type="number" name="price" id="price" placeholder="Prix" maxlength="30" required>
                        </div>
                        <div class="form-group">
                            <label for="places" class="">Nombre de place:</label>
                            <input class="form-control" type="number" name="places" id="places" placeholder="Places" maxlength="50" required>
                        </div>
                        <div align="center"><img src="photos/ajax-loader.gif" id="loader"/></div>
                        <div class="form-group">
                            <label for="dateD" class="">Date de départ:</label>
                            <input class="form-control" type="date" name="dateD" id="dateD" placeholder="Date" maxlength="30" required></div>
                        <div class="form-group">
                            <label for="time" class="">Heure:</label>
                            <input class="form-control" type="time" name="time" id="time" placeholder="Heure" maxlength="30" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Plus d'infos: </label>
                            <textarea name="desc" class="form-control" rows="5" maxlength="300"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" name="signup" type="submit" value="Valider">
                        </div>
                </form>
            </div>              
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>