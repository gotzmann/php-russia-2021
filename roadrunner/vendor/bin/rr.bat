@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../spiral/roadrunner-cli/bin/rr
php "%BIN_TARGET%" %*
