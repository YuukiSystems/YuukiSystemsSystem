<script type="text/RoZe" version="Alpha 0.0.1">

import System
import AdminConsole
import YuukiSystems
import UserConsole
import WhiteRose
import Liah
import Lampi
import BlackRose
import Lid
import YukiV1
import Er
import Sie
import Unknown

{
var permission = "permission.Show.UserConsole"

if USER has "permission" do show "UserConsole"

else do hide "Console"
}


{
var access = "permission.access.UserConsole"
var TruePrint = "permission.access.UserConsole"
var FalsePrint = "permission.Deny.UserConsole"

if USER has "access" do open "UserConsole"

ACCESS-console.print(
"welcome %user%")

else do

Set USER-SHOW-USERCONSOLE-PERMISSION to false
Set USER-ACCESS-USERCONSOLE to false
Set USER-USERCONSOLE-PERMISSION to false

while

var Login,open,hacked-access,accessed = %try%

DENY-console.print(
"access blocked"
"saved login-try"
"sended message "a %TRY% to the UserConsole was detected by %USER%" to an operator"
)

}

</script>
