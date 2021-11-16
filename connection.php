<?PHP
class connection{
public function__construct(){
$con=new PDO("mysql:host:localhost;dbname=gestionstock","root"," ");}
echo"connection reussi";}
catch(PDO Exception $e){
echo"connection echoue".$e>getmessage();
?>