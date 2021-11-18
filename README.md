# PHP Windows Base Directory

A library to return various Microsoft Windows directory/folder paths based on 
runtime environment variables.

## Usage

```php
$wbd = new WindowsBaseDir\Wbd;

// Print various paths
echo $wbd->getCommonProgramFilesPath();
echo $wbd->getCommonProgramFilesX86Path();
echo $wbd->getHomeDrivePath();
echo $wbd->getProgramDataPath();
echo $wbd->getProgramFilesPath();
echo $wbd->getSystemDrivePath();
echo $wbd->getSystemRootPath();
echo $wbd->getTempPath();

if ($wbd->isWindowsEnvironment()) {
    $home = $wbd->getHomeDrivePath() . $wbd->getHomePath();
}
else {
    // ...
}
```

Get all available paths:

```php
$paths = (new WindowsBaseDir\Wbd)->getAllEnvironmentPaths();
```

```php
Array
(
    [ALLUSERSPROFILE] => C:\ProgramData
    [APPDATA] => C:\Users\JoeBloggs\AppData\Roaming
    [COMSPEC] => C:\WINDOWS\system32\cmd.exe
    [COMMONPROGRAMFILES] => C:\Program Files (x86)\Common Files
    [COMMONPROGRAMFILES(X86)] => C:\Program Files (x86)\Common Files
    [DRIVERDATA] => C:\Windows\System32\Drivers\DriverData
    [HOMEDRIVE] => C:
    [HOME] => \Users\JoeBloggs
    [LOCALAPPDATA] => C:\Users\JoeBloggs\AppData\Local
    [LOGONSERVER] => \\DESKTOP-QI5UIAH
    [ONEDRIVE] => C:\Users\JoeBloggs\OneDrive
    [PATH] => C:\Python27\;C:\Python27\Scripts;C:\Windows\system32
    [PROGRAMDATA] => C:\ProgramData
    [PROGRAMFILES] => C:\Program Files (x86)
    [PROGRAMFILES(X86)] => C:\Program Files (x86)
    [PUBLIC] => C:\Users\Public
    [SYSTEMDRIVE] => C:
    [SYSTEMROOT] => C:\WINDOWS
    [TEMP] => C:\Users\JoeBloggs\AppData\Local\Temp
    [USERPROFILE] => C:\Users\JoeBloggs
    [WINDIR] => C:\WINDOWS
)
```

Alternatively use `getAllPaths` for underscore separated and lowercase keys:

```php
$paths = (new WindowsBaseDir\Wbd)->getAllPaths();
```

```php
Array
(
    [all_users_profile] => C:\ProgramData
    [app_data] => C:\Users\JoeBloggs\AppData\Roaming
    [com_spec] => C:\WINDOWS\system32\cmd.exe
    [common_program_files] => C:\Program Files (x86)\Common Files
    [common_program_files_x86] => C:\Program Files (x86)\Common Files
    [driver_data] => C:\Windows\System32\Drivers\DriverData
    [home_drive] => C:
    [home] => \Users\JoeBloggs
    [local_app_data] => C:\Users\JoeBloggs\AppData\Local
    [logon_server] => \\DESKTOP-QI5UIAH
    [one_drive] => C:\Users\JoeBloggs\OneDrive
    [path] => C:\Python27\;C:\Python27\Scripts;C:\Windows\system32
    [program_data] => C:\ProgramData
    [program_files] => C:\Program Files (x86)
    [program_files_x86] => C:\Program Files (x86)
    [public] => C:\Users\Public
    [system_drive] => C:
    [system_root] => C:\WINDOWS
    [temp] => C:\Users\JoeBloggs\AppData\Local\Temp
    [user_profile] => C:\Users\JoeBloggs
    [win_dir] => C:\WINDOWS
)
```

## Testing

Copy `phpunit.dist.xml` to `phpunit.xml` and run

```bash
./vendor/bin/phpunit
```

## License

MIT License. See [License](https://github.com/gibbs/php-windows-base-dir/blob/master/LICENSE).
