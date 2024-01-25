#	OS/1337 Netboot
###	Self-Hosting
Why and How to self-host the Bootserver internally instead of using ``http://boot.os1337.com`` as public bootserver.

---

##	Main Considerations
######	You may want to self-host oot images onsite instead of using our public Bootserver.
Shure you could just cache the public images using ``squid`` or any HTTP ``proxy`` locally if you only want to reduce WAN-sided traffic.
- But there are other reasons why this ain't an option.

###


###	Self-Hosting for airgapped networks
Not every network may be connected to the Internet for security reasons or because it's just not practical at all...
- May it be installations that are extremely remote or critical infrastructure that is intentionally airgapped.

###


###	Necessary Configuration Changes
####	[iPXE Scripts](configs/ipxe/)
The [``script.ipxe``](configs/ipxe/script.ipxe) file needs to be changed to query your bootserver instead.
- You'll also need to sign it yourself and deploy your signature instead of using the published [``script.ipxe.sig``](configs/ipxe/script.ipxe.sig) if you intent to use trusted & verified images.
  - This is recommended for security reasons in any security-based setup.
    - The use of ``script.ipxe.sig`` is done to verify images loaded from ``http://boot.os1337.com`` in lieu of using ``HTTPS`` and having to deal with SSL certificates.
    - This allows for transparent caching without compromising integrity of the images.
      - Digital Signature of Files is inherently superior to Transport Encryption, as it's an end-to-end approach not relying on "trustworthy intermediaries" in between!

###
