#!/usr/bin/expect -f

# REMOVE OLD FOLDER
spawn ssh -p 1024 host1213989@185.26.122.180
expect "assword:"
send "APsJFlBce\r"
expect "Last login:"
send "cd abu.dev/htdocs/www/\r"
expect ""
send "rm -rf flowers\r"
expect ""
send "mkdir flowers\r"
expect ""
send "exit\r"
interact

# BUILD
spawn bash -c "gulp production"
interact

# DEPLOY TO HOSTLAND
spawn bash -c "scp -r -P 1024 ./dist/* host1213989@185.26.122.180:./abu.dev/htdocs/www/flowers/"
expect "assword:"
send "APsJFlBce\r"
interact
