<?php

//set connection variables
$host = "localhost";
$username = "root";
$password = "!Crombie5231";
$db_name = "jonatan";

//set connection to server and database
$conn = mysqli_connect("localhost", "root", "!Crombie5231", "jonatan");

if (!$conn) {
    echo "Error: Unable to connect to MySQL.";
    exit;
}

$api = new API();

// logit(INFO, "REQUEST: " . print_r($_REQUEST, 1));

switch ($_REQUEST["action"]) {

    case "saveRSVP":
    $api->makeRSVP();
    $api->sendRSVP();
    break;

    default:
    $api->resp->error = "No command found";

} //-es



if (!isset($api->resp->error)) {
    $api->resp->resp = 'OK';
}
header('Content-Type: application/json');
echo to_json($api->resp);


class API {

  public function makeRSVP()
  {
    $this->rsvp = new stdClass();
    $temp = $_REQUEST["data"];
    $this->resp->data = $temp;
    $this->rsvp->childname = $this->resp->data[childName];
    $this->rsvp->parent1name = $this->resp->data[parent1Name];
    $this->rsvp->parent1phone = $this->resp->data[parent1Phone];
    $this->rsvp->parent1email = $this->resp->data[parent1Email];
    $this->rsvp->parent2name = $this->resp->data[parent2Name];
    $this->rsvp->parent2phone = $this->resp->data[parent2Phone];
    $this->rsvp->parent2email = $this->resp->data[parent2Email];
    $this->rsvp->numberguests = $this->resp->data[numberGuests];
    $this->rsvp->guestnames = $this->resp->data[whoGuests];
    $this->rsvp->comments = $this->resp->data[comments];
  } // - ef makeRSVP

  public function saveRSVP()
  {
    $in = array();
    $in[":childname"] = $this->rsvp->childname;
    $in[":parent1name"] = $this->rsvp->parent1name;
    $in[":parent1phone"] = $this->rsvp->parent1phone;
    $in[":parent1email"] = $this->rsvp->parent1email;
    $in[":parent2name"] = $this->rsvp->parent2name;
    $in[":parent2phone"] = $this->rsvp->parent2phone;
    $in[":parent2email"] = $this->rsvp->parent2email;
    $in[":numberguests"] = $this->rsvp->numberguests;
    $in[":guestnames"] = $this->rsvp->guestnames;
    $in[":comments"] = $this->rsvp->comments;

    $sql = "INSERT INTO birthday ( childname, parent1name, parent1email, parent1phone, parent2name, parent2email, parent2phone, numberguest, guestnames, comments)
            VALUES               (:childname,:parent1name,:parent1email,:parent1phone,:parent2name,:parent2email,:parent2phone,:numberguest,:guestnames,:comments)";

    if(!mysqli_query($con, $sql)){
      echo "not inserted";
    } else {
      echo "inserted";
      echo $sql;
    }

  }

}//ec


mysqli_close($conn);

?>
