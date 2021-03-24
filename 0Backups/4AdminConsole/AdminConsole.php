<script type="text/RoZe" version="Alpha 0.0.1">

import YuukiSystems
import AdminConsole

{
var permission = "permission.Show.AdminConsole"

if USER has "permission" do show "AdminConsole"

else do hide "AdminConsole"
}


{
var access = "permission.access.AdminConsole"
var TruePrint = "permission.access.AdminConsole"
var FalsePrint = "permission.Deny.AdminConsole"

if USER has "access" do open "AdminConsole"

ACCESS-console.print(
"welcome %user%"
"please Login"
"Login:"
"Password:"
)

else do

Set USER-SHOW-ADMIN-CONSOLE-PERMISSION to false
Set USER-ACCESS-ADMIN-CONSOLE to false
Set USER-CONSOLE-PERMISSION to true

while

var Login,open,hacked-access,accessed = %try%

DENY-console.print(
"access blocked"
"saved login-try"
"sended message "a %TRY% to the AdminConsole was detected by %USER%" to an operator"
)

}
</script>
