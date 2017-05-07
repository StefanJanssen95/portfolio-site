Set-Location $PSScriptRoot

[xml]$Config = Get-Content "config.xml"
Set-Location ($Config.Settings.DockerComposeLocation)

Write-Output "Stopping containers";
docker-compose stop

Set-Location $PSScriptRoot
Set-Location $Config.Settings.AfterDoneLocation