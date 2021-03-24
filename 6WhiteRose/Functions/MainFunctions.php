<script type="text/RoZe">

var Heart Beats Per Minute = "HBPM"
var Pulse = "PSE"
var Blood Cirkulation = "BC"
var Feelings = "Feeling"
var SetSoulFree = "SSF"

Status(0 = Dead)
Status(1 = Normal)
Status(2 = Happy)
Status(3 = Fear)
Status(4 = Depressed)
Status(5 = angry)
Status(6 = sad)
Status(420 = High)
Status(69 = Adrenalin)
normal: HBPM, PSE, BC, = 120, 120, "1"
High: HBPM, PSE, BC, = <!Random!>

if Event("Feelings") Set to 0 do "SSF"
while HBPM,PSE,BC Change to 0 0 0

if HBPM,PSE,BC Set to 0 delete "YuukiSystemsSystem"

if Event("Feelings") Set to 1 do = 1

if Event("Feelings") Set to 2 do Multiply HBPM,PSE,BC by 2

if Event("Feelings") Set to 3 do Change HBPM,PSE,BC to 69

if Event("Feelings") Set to 4 do Divide HBPM,PSE,BC by 2

if Event("Feelings") Set to 5 do Multiply HBPM,PSE,BC by 2

if Event("Feelings") Set to 6 do Subtract HBPM,PSE,BC by 50

}

</script>
