# OS/1337 netboot

Network / Internet Boot Configurations needed to boot OS/1337 via Network and/or Internet

---



##	Why?

###	To make [OS/1337](https://github.com/OS-1337/OS1337) a versatile and easy to use recovery & rescue Linux.

Being able to boot it easily from naked machines is kinda important and useful.

######	This is intended to mimic most "Rescue Linux" OSes used by big hosters and classic recovery distros like ["Tom's Root Boot"](https://en.wikipedia.org/wiki/Tomsrtbt) as well as the [Raspberry Pi Online Installer](https://www.youtube.com/watch?v=qlBIfpBwqKY) that has been added to the Firmware of the Raspberry Pi 4 Series (including Pi4B, CM4 and Pi400), allowing for easy setup similar to [Apple's Recovery System](https://support.apple.com/en-us/guide/mac-help/mchl82829c17/mac) aka. *"BridgeOS"* ...

At the end, one can have a fully-automatically netbooting system that starts (ideally the latest current version of) [OS/1337](https://os1337.com) and is then ready for use.


### Direct Online-Booting of OS/1337 as an easy easy way to use the latest version.

Which allows for [diskless](https://en.wikipedia.org/wiki/Diskless_node) setups and using OS/1337 as easy to setup and maintain [Thin Client](https://en.wikipedia.org/wiki/Thin_client) / "[SSH](https://en.wikipedia.org/wiki/Secure_Shell) [Terminal](https://en.wikipedia.org/wiki/Computer_terminal)" System in critical applications.
- Combining the [Advantages of Diskless Clients](https://en.wikipedia.org/wiki/Diskless_node#Advantages_of_diskless_nodes_over_thin_clients)  [and Thin Clients](https://en.wikipedia.org/wiki/Diskless_node#Advantages_of_thin_clients_over_diskless_nodes) thanks to the fact that OS/1337 is [loaded once into RAM and run entirely from it](https://en.wikipedia.org/wiki/List_of_Linux_distributions_that_run_from_RAM).






##	How?

### Using [iPXE](https://ipxe.org/) as boot firmware
Which can be [chainloaded](https://ipxe.org/howto/chainloading) as bootloader, a OS/1337 image is being loaded via TFTP or HTTP and subsequently booted.



---

##	Navigating the Project Files:

```
OS/1337 Netboot Repository
├── build 					# build directory
│   ├── build.conf.d				# Build Configurations...
│   │   └── ipxe.config				# ...for iPXE
│   ├── downloads				# Cached Version of the Source Downloads
│   ├── scripts					# Build Scripts
│   │   └── sources.lists.d			# Download URLs
│   │       └── ipxe.url			# Download URL of the latest release Version Source
│   └── working					# Working Directory
├── configs					# Configurations for various Systems & Parts
│   ├── dhcp					# Configs for ISC DHCPd
│   │   └── dhcpd.conf				# Configuration Parameters so the DHCP can point at the boot server
│   ├── efi					# (U)EFI boot files
│   ├── grub					# Grub Configuration Files
│   │   └── chainload.ipxe.grub.conf		# GRUB config to chainload iPXE
│   ├── ipfire					# ipFire Configuration files
│   │   └── updxlrator				# "UpdateAccelerator", a built in Squid Proxy Cache.
│   ├── ipxe					# iPXE Configuration Files
│   │   ├── script.ipxe				# the main boot script
│   │   ├── script.ipxe.sig			# Signature of said Boot Script for verification
│   │   └── unused.params.ipxe			# Just a file with some unused params as of now.
│   └── tftp					# tftp files
├── pub						# Public Servers' Contents
│   └── boot.os1337.com				# The Public OS/1337 Bootserver
│       ├── http				# http_public directory of the OS/1337 bootserver
│       │   ├── boot.php			# the iPXE boot.php script
│       │   ├── index.html			# basic HTML file if someone curious stubles upon the server
│       │   ├── os1337.img			# generic image [i486 CORE Edition]
│       │   ├── robots.txt			# tells crawlers to feck off and not waste bandwith!
│       │   └── trusted-boot@os1337.com.pubkey	# pubkey for the signed files 
│       └── rsync				# rsync jobs
│           └── sync.os1337.releases.sh 	# rsync script to sync the public webservers root directory.
├── docu					# documentation
│   ├── further-reading.md			# further reading materials
│   └── self-hosting.md				# how and why to self-host the bootserver.
├── LICENSE.md					# License
├── README.md					# README
├── TODO.md					# Project TODO list.
└── .gitignore					# Avoids duplicate code to be held in the repository.
```

Thus should provide you with a good overview.


---



##	FAQs

### What license is this project under?

This Project falls under [0BSD License](https://en.wikipedia.org/wiki/BSD_licenses#0-clause_license_(%22BSD_Zero_Clause_License%22)).
- See [LICENSE.md for details](LICENSE.md).

####	IMPORTANT NOTE:
######	This only covers the Work as of this project and not underlying / dependent code like [iPXE](https://ipxe.org) which falls under [GPLv2+](https://ipxe.org/licensing) !
