# OS/1337 Netboot
## TODO

To-Do List for this repository:

---
###

### Add OS/1337 boot image
To be stored at [``boot.os1337.com/os1337.img``](pub/boot.os1337.com/http/os1337.img)
- Current file [``os1337.img``](pub/boot.os1337.com/http/os1337.img) is a random development version of OS/1337!
###

###	Spin up bootserver at [``http://boot.os1337.com``](http://boot.os1337.com)
This is the currently setup domain as per [configurations](configs).
- Currently this subdomain is unused, but available under [os1337.com](https://os1337.com/).
#### This should be done at a beefy webhost that can handle a lot of traffic with ease.
#####	
###

### Add Automatic Sync Script to host the [latest released](https://github.com/OS-1337/OS1337/releases/tag/latest) version of [OS/1337](https://github.com/OS-1337/OS1337) as per [releases page](https://github.com/OS-1337/OS1337/releases) on [``http://boot.os1337.com``](http://boot.os1337.com).
The [current script](pub/boot.os1337.com/rsync/sync.os1337.releases.sh) is a stub.
- Requires ``releases.os1337.com`` to be setup.
###

### Add ``version``, ``edition`` and ``arch`` filter to [``boot.php``](/pub/boot.os1337.com/http/boot.php).
This  would use the [Dynamic Scripts Function of iPXE](https://ipxe.org/scripting#dynamic_scripts).
- Basically expanding these as subparameters to the request:

The Request for 
```http://boot.os1337.com/boot.php?version=latest&edition=core&arch=i486 ```
would then Download the ``latest`` released version of ``OS/1337`` ``CORE`` Edition for ``i486`` and run it.
###

### Add support for multiple dynamic mirrors
Ideally this would mean that by sufficient demand, big mirrors like [``ftp.halifax.rwth-aachen.de``](https://ftp.halifax.rwth-aachen.de/) would support the effort.
###### Since the boot process is intended to use digitally signed images and HTTP instead of HTTPS, it's already *caching - friendly* for tools like [Squid Proxy].
This should be easily configureable in [common web caching solutions like ipFire](https://www.ipfire.org/docs/configuration/network/proxy/update_accelerator) and we're [proving an example config](/configs/ipfire/updxlrator).
- OFC that config may need to be updated [when ipFire 3.x ships](https://www.ipfire.org/docs/devel/proxy/update-accelerator)...
###

###	Add [iPXE Build Config](build/build.conf.d/ipxe.config) to it.
Current file is a stub!
###

###	Enable reproduceable builds using [build scripts](build).
Similar to the scripted pipeline of OS/1337.
- Enable fully-automated reproduceable builds...
###

### Add public keys to [``boot.os1337.com``](pub/boot.os1337.com/http).
As of now, [``trusted-boot@os1337.com.pubkey``](pub/boot.os1337.com/http/trusted-boot@os1337.com.pubkey) is just an empty stuff.
