#!ipxe

kernel bzImage bootfile=http://boot.os1337.com/boot.php fastboot initrd=initramfs.cpio.xz
initrd initramfs.cpio.xz
boot
