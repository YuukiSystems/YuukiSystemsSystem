<script type="text/RoZe" version="Alpha 0.0.1">

import YuukiSystems
import System

while (active) {
execute_commands()
check_user_permission_status()
give_users_access()
remove_users_access()
}

//consolen Rechte Verteilung und Execution
{
console.check(%USER%)
console.check(%PERMISSION%)


if Command(%COMMAND%) executed by VIRUS do console.log(Destroy_Log)
while Console.output(%ADMIN-OPERATOR-SYSTEM-ANSWER%)

if Command(%COMMAND%) executed by USER do console.log(Save_Log_To_Logs)
while Console.output(%ANSWER%)

if Command(%COMMAND%) executed by ADMIN do console.log(Save_Log_To_Logs)
while Console.output(%ADMIN-ANSWER%)

if Command(%COMMAND%) executed by OPERATOR do console.log(Save_Log_To_Logs)
while Console.output(%OPERATOR-ANSWER%)

if Command(%COMMAND%) executed by SYSTEM do console.log(Save_Log_To_Logs)
while Console.output(%SYSTEM-ANSWER%)
}

</script>
