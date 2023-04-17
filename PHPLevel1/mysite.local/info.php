<?php

phpinfo();

// Настройки Core PHP находится в документации phpinfo()

// Master value : это то что написано в php.ini
// Local  value : это то что написано на локалне машине
// например мы включили короткий тег в .htaccess

/*
// можно его запустить через терминал:
//  ~$ php info.php
phpinfo()
PHP Version => 8.1.2-1ubuntu2.11

System => Linux pc-gaming 5.15.0-70-generic #77-Ubuntu SMP Tue Mar 21 14:02:37 UTC 2023 x86_64
Build Date => Feb 22 2023 22:56:18
Build System => Linux
Server API => Command Line Interface
Virtual Directory Support => disabled
Configuration File (php.ini) Path => /etc/php/8.1/cli
Loaded Configuration File => /etc/php/8.1/cli/php.ini
Scan this dir for additional .ini files => /etc/php/8.1/cli/conf.d
Additional .ini files parsed => /etc/php/8.1/cli/conf.d/10-mysqlnd.ini,
/etc/php/8.1/cli/conf.d/10-opcache.ini,
/etc/php/8.1/cli/conf.d/10-pdo.ini,
/etc/php/8.1/cli/conf.d/15-xml.ini,
/etc/php/8.1/cli/conf.d/20-amqp.ini,
/etc/php/8.1/cli/conf.d/20-bcmath.ini,
/etc/php/8.1/cli/conf.d/20-calendar.ini,
/etc/php/8.1/cli/conf.d/20-ctype.ini,
/etc/php/8.1/cli/conf.d/20-curl.ini,
/etc/php/8.1/cli/conf.d/20-dom.ini,
/etc/php/8.1/cli/conf.d/20-exif.ini,
/etc/php/8.1/cli/conf.d/20-ffi.ini,
/etc/php/8.1/cli/conf.d/20-fileinfo.ini,
/etc/php/8.1/cli/conf.d/20-ftp.ini,
/etc/php/8.1/cli/conf.d/20-gd.ini,
/etc/php/8.1/cli/conf.d/20-gettext.ini,
/etc/php/8.1/cli/conf.d/20-iconv.ini,
/etc/php/8.1/cli/conf.d/20-igbinary.ini,
/etc/php/8.1/cli/conf.d/20-imagick.ini,
/etc/php/8.1/cli/conf.d/20-intl.ini,
/etc/php/8.1/cli/conf.d/20-ldap.ini,
/etc/php/8.1/cli/conf.d/20-mbstring.ini,
/etc/php/8.1/cli/conf.d/20-mongodb.ini,
/etc/php/8.1/cli/conf.d/20-mysqli.ini,
/etc/php/8.1/cli/conf.d/20-pdo_mysql.ini,
/etc/php/8.1/cli/conf.d/20-pdo_pgsql.ini,
/etc/php/8.1/cli/conf.d/20-pdo_sqlite.ini,
/etc/php/8.1/cli/conf.d/20-pgsql.ini,
/etc/php/8.1/cli/conf.d/20-phar.ini,
/etc/php/8.1/cli/conf.d/20-posix.ini,
/etc/php/8.1/cli/conf.d/20-readline.ini,
/etc/php/8.1/cli/conf.d/20-redis.ini,
/etc/php/8.1/cli/conf.d/20-shmop.ini,
/etc/php/8.1/cli/conf.d/20-simplexml.ini,
/etc/php/8.1/cli/conf.d/20-soap.ini,
/etc/php/8.1/cli/conf.d/20-sockets.ini,
/etc/php/8.1/cli/conf.d/20-sqlite3.ini,
/etc/php/8.1/cli/conf.d/20-sysvmsg.ini,
/etc/php/8.1/cli/conf.d/20-sysvsem.ini,
/etc/php/8.1/cli/conf.d/20-sysvshm.ini,
/etc/php/8.1/cli/conf.d/20-tokenizer.ini,
/etc/php/8.1/cli/conf.d/20-xdebug.ini,
/etc/php/8.1/cli/conf.d/20-xmlreader.ini,
/etc/php/8.1/cli/conf.d/20-xmlwriter.ini,
/etc/php/8.1/cli/conf.d/20-xsl.ini,
/etc/php/8.1/cli/conf.d/20-zip.ini

PHP API => 20210902
PHP Extension => 20210902
Zend Extension => 420210902
Zend Extension Build => API420210902,NTS
PHP Extension Build => API20210902,NTS
Debug Build => no
Thread Safety => disabled
Zend Signal Handling => enabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => available, disabled

Registered PHP Streams => https, ftps, compress.zlib, php, file, glob, data, http, ftp, phar, zip
Registered Stream Socket Transports => tcp, udp, unix, udg, ssl, tls, tlsv1.0, tlsv1.1, tlsv1.2, tlsv1.3
Registered Stream Filters => zlib.*, string.rot13, string.toupper, string.tolower, convert.*, consumed, dechunk, convert.iconv.*

This program makes use of the Zend Scripting Language Engine:
Zend Engine v4.1.2, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.2-1ubuntu2.11, Copyright (c), by Zend Technologies
    with Xdebug v3.1.2, Copyright (c) 2002-2021, by Derick Rethans


 _______________________________________________________________________


Configuration

amqp

Version => 1.11.0
Revision => release
Compiled => Jan  3 2022 @ 14:01:21
AMQP protocol version => 0-9-1
librabbitmq version => 0.10.0
Default max channels per connection => 256
Default max frame size => 131072
Default heartbeats interval => 0

Directive => Local Value => Master Value
amqp.auto_ack => 0 => 0
amqp.cacert => no value => no value
amqp.cert => no value => no value
amqp.channel_max => 256 => 256
amqp.connect_timeout => 0 => 0
amqp.frame_max => 131072 => 131072
amqp.global_prefetch_count => 0 => 0
amqp.global_prefetch_size => 0 => 0
amqp.heartbeat => 0 => 0
amqp.host => localhost => localhost
amqp.key => no value => no value
amqp.login => guest => guest
amqp.password => guest => guest
amqp.port => 5672 => 5672
amqp.prefetch_count => 3 => 3
amqp.prefetch_size => 0 => 0
amqp.read_timeout => 0 => 0
amqp.rpc_timeout => 0 => 0
amqp.sasl_method => 0 => 0
amqp.timeout => no value => no value
amqp.verify => 1 => 1
amqp.vhost => / => /
amqp.write_timeout => 0 => 0

bcmath

BCMath support => enabled

Directive => Local Value => Master Value
bcmath.scale => 0 => 0

calendar

Calendar support => enabled

Core

PHP Version => 8.1.2-1ubuntu2.11

Directive => Local Value => Master Value
allow_url_fopen => On => On
allow_url_include => Off => Off
arg_separator.input => & => &
arg_separator.output => & => &
auto_append_file => no value => no value
auto_globals_jit => On => On
auto_prepend_file => no value => no value
browscap => no value => no value
default_charset => UTF-8 => UTF-8
default_mimetype => text/html => text/html
disable_classes => no value => no value
disable_functions => no value => no value
display_errors => Off => Off
display_startup_errors => Off => Off
doc_root => no value => no value
docref_ext => no value => no value
docref_root => no value => no value
enable_dl => Off => Off
enable_post_data_reading => On => On
error_append_string => no value => no value
error_log => no value => no value
error_prepend_string => no value => no value
error_reporting => 22527 => 22527
expose_php => On => On
extension_dir => /usr/lib/php/20210902 => /usr/lib/php/20210902
fiber.stack_size => no value => no value
file_uploads => On => On
hard_timeout => 2 => 2
highlight.comment => <font style="color: #FF8000">#FF8000</font> => <font style="color: #FF8000">#FF8000</font>
highlight.default => <font style="color: #0000BB">#0000BB</font> => <font style="color: #0000BB">#0000BB</font>
highlight.html => <font style="color: #000000">#000000</font> => <font style="color: #000000">#000000</font>
highlight.keyword => <font style="color: #007700">#007700</font> => <font style="color: #007700">#007700</font>
highlight.string => <font style="color: #DD0000">#DD0000</font> => <font style="color: #DD0000">#DD0000</font>
html_errors => Off => Off
ignore_repeated_errors => Off => Off
ignore_repeated_source => Off => Off
ignore_user_abort => Off => Off
implicit_flush => On => On
include_path => .:/usr/share/php => .:/usr/share/php
input_encoding => no value => no value
internal_encoding => no value => no value
log_errors => On => On
mail.add_x_header => Off => Off
mail.force_extra_parameters => no value => no value
mail.log => no value => no value
max_execution_time => 0 => 0
max_file_uploads => 20 => 20
max_input_nesting_level => 64 => 64
max_input_time => -1 => -1
max_input_vars => 3000 => 3000
max_multipart_body_parts => -1 => -1
memory_limit => -1 => -1
open_basedir => no value => no value
output_buffering => 0 => 0
output_encoding => no value => no value
output_handler => no value => no value
post_max_size => 250M => 250M
precision => 14 => 14
realpath_cache_size => 4096K => 4096K
realpath_cache_ttl => 120 => 120
register_argc_argv => On => On
report_memleaks => On => On
report_zend_debug => Off => Off
request_order => GP => GP
sendmail_from => no value => no value
sendmail_path => /usr/sbin/sendmail -t -i => /usr/sbin/sendmail -t -i
serialize_precision => -1 => -1
short_open_tag => Off => Off
SMTP => localhost => localhost
smtp_port => 25 => 25
sys_temp_dir => no value => no value
syslog.facility => LOG_USER => LOG_USER
syslog.filter => no-ctrl => no-ctrl
syslog.ident => php => php
unserialize_callback_func => no value => no value
upload_max_filesize => 200M => 200M
upload_tmp_dir => no value => no value
user_dir => no value => no value
user_ini.cache_ttl => 300 => 300
user_ini.filename => .user.ini => .user.ini
variables_order => GPCS => GPCS
xmlrpc_error_number => 0 => 0
xmlrpc_errors => Off => Off
zend.assertions => -1 => -1
zend.detect_unicode => On => On
zend.enable_gc => On => On
zend.exception_ignore_args => On => On
zend.exception_string_param_max_len => 0 => 0
zend.multibyte => Off => Off
zend.script_encoding => no value => no value
zend.signal_check => Off => Off

ctype

ctype functions => enabled

curl

cURL support => enabled
cURL Information => 7.81.0
Age => 9
Features
AsynchDNS => Yes
CharConv => No
Debug => No
GSS-Negotiate => No
IDN => Yes
IPv6 => Yes
krb4 => No
Largefile => Yes
libz => Yes
NTLM => Yes
NTLMWB => Yes
SPNEGO => Yes
SSL => Yes
SSPI => No
TLS-SRP => Yes
HTTP2 => Yes
GSSAPI => Yes
KERBEROS5 => Yes
UNIX_SOCKETS => Yes
PSL => Yes
HTTPS_PROXY => Yes
MULTI_SSL => No
BROTLI => Yes
Protocols => dict, file, ftp, ftps, gopher, gophers, http, https, imap, imaps, ldap, ldaps, mqtt, pop3, pop3s, rtmp, rtsp, scp, sftp, smb, smbs, smtp, smtps, telnet, tftp
Host => x86_64-pc-linux-gnu
SSL Version => OpenSSL/3.0.2
ZLib Version => 1.2.11
libSSH Version => libssh/0.9.6/openssl/zlib

Directive => Local Value => Master Value
curl.cainfo => no value => no value

date

date/time support => enabled
timelib version => 2021.11
"Olson" Timezone Database Version => 0.system
Timezone Database => internal
Default timezone => Europe/Moscow

Directive => Local Value => Master Value
date.default_latitude => 31.7667 => 31.7667
date.default_longitude => 35.2333 => 35.2333
date.sunrise_zenith => 90.833333 => 90.833333
date.sunset_zenith => 90.833333 => 90.833333
date.timezone => no value => no value

dom

DOM/XML => enabled
DOM/XML API Version => 20031129
libxml Version => 2.9.13
HTML Support => enabled
XPath Support => enabled
XPointer Support => enabled
Schema Support => enabled
RelaxNG Support => enabled

exif

EXIF Support => enabled
Supported EXIF Version => 0220
Supported filetypes => JPEG, TIFF
Multibyte decoding support using mbstring => enabled
Extended EXIF tag formats => Canon, Casio, Fujifilm, Nikon, Olympus, Samsung, Panasonic, DJI, Sony, Pentax, Minolta, Sigma, Foveon, Kyocera, Ricoh, AGFA, Epson

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

FFI

FFI support => enabled

Directive => Local Value => Master Value
ffi.enable => preload => preload
ffi.preload => no value => no value

fileinfo

fileinfo support => enabled
libmagic => 540

filter

Input Validation and Filtering => enabled

Directive => Local Value => Master Value
filter.default => unsafe_raw => unsafe_raw
filter.default_flags => no value => no value

ftp

FTP support => enabled
FTPS support => enabled

gd

GD Support => enabled
GD headers Version => 2.3.0
GD library Version => 2.3.0
FreeType Support => enabled
FreeType Linkage => with freetype
GIF Read Support => enabled
GIF Create Support => enabled
JPEG Support => enabled
PNG Support => enabled
WBMP Support => enabled
XPM Support => enabled
XBM Support => enabled
WebP Support => enabled
BMP Support => enabled
TGA Read Support => enabled

Directive => Local Value => Master Value
gd.jpeg_ignore_warning => 1 => 1

gettext

GetText Support => enabled

hash

hash support => enabled
Hashing Engines => md2 md4 md5 sha1 sha224 sha256 sha384 sha512/224 sha512/256 sha512 sha3-224 sha3-256 sha3-384 sha3-512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b crc32c fnv132 fnv1a32 fnv164 fnv1a64 joaat murmur3a murmur3c murmur3f xxh32 xxh64 xxh3 xxh128 haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5

MHASH support => Enabled
MHASH API Version => Emulated Support

iconv

iconv support => enabled
iconv implementation => glibc
iconv library version => 2.35

Directive => Local Value => Master Value
iconv.input_encoding => no value => no value
iconv.internal_encoding => no value => no value
iconv.output_encoding => no value => no value

igbinary

igbinary support => enabled
igbinary version => 3.2.6
igbinary APCu serializer ABI => 0
igbinary session support => yes

Directive => Local Value => Master Value
igbinary.compact_strings => On => On

imagick

imagick module => enabled
imagick module version => 3.6.0
imagick classes => Imagick, ImagickDraw, ImagickPixel, ImagickPixelIterator, ImagickKernel
Imagick compiled with ImageMagick version => ImageMagick 6.9.11-60 Q16 x86_64 2021-01-25 https://imagemagick.org
Imagick using ImageMagick library version => ImageMagick 6.9.11-60 Q16 x86_64 2021-01-25 https://imagemagick.org
ImageMagick copyright => (C) 1999-2021 ImageMagick Studio LLC
ImageMagick release date => 2021-01-25
ImageMagick number of supported formats:  => 247
ImageMagick supported formats => 3FR, 3G2, 3GP, AAI, AI, APNG, ART, ARW, AVI, AVIF, AVS, BGR, BGRA, BGRO, BIE, BMP, BMP2, BMP3, BRF, CAL, CALS, CANVAS, CAPTION, CIN, CIP, CLIP, CMYK, CMYKA, CR2, CR3, CRW, CUR, CUT, DATA, DCM, DCR, DCX, DDS, DFONT, DJVU, DNG, DOT, DPX, DXT1, DXT5, EPDF, EPI, EPS, EPS2, EPS3, EPSF, EPSI, EPT, EPT2, EPT3, ERF, EXR, FAX, FILE, FITS, FRACTAL, FTP, FTS, G3, G4, GIF, GIF87, GRADIENT, GRAY, GRAYA, GROUP4, GV, H, HALD, HDR, HEIC, HISTOGRAM, HRZ, HTM, HTML, HTTP, HTTPS, ICB, ICO, ICON, IIQ, INFO, INLINE, IPL, ISOBRL, ISOBRL6, J2C, J2K, JBG, JBIG, JNG, JNX, JP2, JPC, JPE, JPEG, JPG, JPM, JPS, JPT, JSON, K25, KDC, LABEL, M2V, M4V, MAC, MAGICK, MAP, MASK, MAT, MATTE, MEF, MIFF, MKV, MNG, MONO, MOV, MP4, MPC, MPG, MRW, MSL, MSVG, MTV, MVG, NEF, NRW, NULL, ORF, OTB, OTF, PAL, PALM, PAM, PANGO, PATTERN, PBM, PCD, PCDS, PCL, PCT, PCX, PDB, PDF, PDFA, PEF, PES, PFA, PFB, PFM, PGM, PGX, PICON, PICT, PIX, PJPEG, PLASMA, PNG, PNG00, PNG24, PNG32, PNG48, PNG64, PNG8, PNM, POCKETMOD, PPM, PREVIEW, PS, PS2, PS3, PSB, PSD, PTIF, PWP, RADIAL-GRADIENT, RAF, RAS, RAW, RGB, RGBA, RGBO, RGF, RLA, RLE, RMF, RW2, SCR, SCT, SFW, SGI, SHTML, SIX, SIXEL, SPARSE-COLOR, SR2, SRF, STEGANO, SUN, SVG, SVGZ, TEXT, TGA, THUMBNAIL, TIFF, TIFF64, TILE, TIM, TTC, TTF, TXT, UBRL, UBRL6, UIL, UYVY, VDA, VICAR, VID, VIDEO, VIFF, VIPS, VST, WBMP, WEBM, WEBP, WMF, WMV, WMZ, WPG, X, X3F, XBM, XC, XCF, XPM, XPS, XV, XWD, YCbCr, YCbCrA, YUV

Directive => Local Value => Master Value
imagick.allow_zero_dimension_images => 0 => 0
imagick.locale_fix => 0 => 0
imagick.progress_monitor => 0 => 0
imagick.set_single_thread => 1 => 1
imagick.shutdown_sleep_count => 10 => 10
imagick.skip_version_check => 1 => 1

intl

Internationalization support => enabled
ICU version => 70.1
ICU Data version => 70.1
ICU Unicode version => 14.0

Directive => Local Value => Master Value
intl.default_locale => no value => no value
intl.error_level => 0 => 0
intl.use_exceptions => Off => Off

json

json support => enabled

ldap

LDAP Support => enabled
Total Links => 0/unlimited
API Version => 3001
Vendor Name => OpenLDAP
Vendor Version => 20511
SASL Support => Enabled

Directive => Local Value => Master Value
ldap.max_links => Unlimited => Unlimited

libxml

libXML support => active
libXML Compiled Version => 2.9.13
libXML Loaded Version => 20913
libXML streams => enabled

mbstring

Multibyte Support => enabled
Multibyte string engine => libmbfl
HTTP input encoding translation => disabled
libmbfl version => 1.3.2

mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.

Multibyte (japanese) regex support => enabled
Multibyte regex (oniguruma) version => 6.9.7

Directive => Local Value => Master Value
mbstring.detect_order => no value => no value
mbstring.encoding_translation => Off => Off
mbstring.http_input => no value => no value
mbstring.http_output => no value => no value
mbstring.http_output_conv_mimetypes => ^(text/|application/xhtml\+xml) => ^(text/|application/xhtml\+xml)
mbstring.internal_encoding => no value => no value
mbstring.language => neutral => neutral
mbstring.regex_retry_limit => 1000000 => 1000000
mbstring.regex_stack_limit => 100000 => 100000
mbstring.strict_detection => Off => Off
mbstring.substitute_character => no value => no value

mongodb

MongoDB support => enabled
MongoDB extension version => 1.15.1
MongoDB extension stability => stable
libbson bundled version => 1.23.2
libmongoc bundled version => 1.23.2
libmongoc SSL => enabled
libmongoc SSL library => OpenSSL
libmongoc crypto => enabled
libmongoc crypto library => libcrypto
libmongoc crypto system profile => disabled
libmongoc SASL => disabled
libmongoc ICU => disabled
libmongoc compression => enabled
libmongoc compression snappy => disabled
libmongoc compression zlib => enabled
libmongoc compression zstd => disabled
libmongocrypt bundled version => 1.5.2
libmongocrypt crypto => enabled
libmongocrypt crypto library => libcrypto
crypt_shared library version => unknown

Directive => Local Value => Master Value
mongodb.debug => no value => no value

mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 8.1.2-1ubuntu2.11
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
mysqli.allow_local_infile => Off => Off
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_pw => no value => no value
mysqli.default_socket => /var/run/mysqld/mysqld.sock => /var/run/mysqld/mysqld.sock
mysqli.default_user => no value => no value
mysqli.local_infile_directory => no value => no value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.reconnect => Off => Off
mysqli.rollback_on_cached_plink => Off => Off

mysqlnd

mysqlnd => enabled
Version => mysqlnd 8.1.2-1ubuntu2.11
Compression => supported
core SSL => supported
extended SSL => supported
Command buffer size => 4096
Read buffer size => 32768
Read timeout => 86400
Collecting statistics => Yes
Collecting memory statistics => No
Tracing => n/a
Loaded plugins => mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_caching_sha2_password,auth_plugin_sha256_password
API Extensions => mysqli,pdo_mysql

openssl

OpenSSL support => enabled
OpenSSL Library Version => OpenSSL 3.0.2 15 Mar 2022
OpenSSL Header Version => OpenSSL 3.0.2 15 Mar 2022
Openssl default config => /usr/lib/ssl/openssl.cnf

Directive => Local Value => Master Value
openssl.cafile => no value => no value
openssl.capath => no value => no value

pcntl

pcntl support => enabled

pcre

PCRE (Perl Compatible Regular Expressions) Support => enabled
PCRE Library Version => 10.39 2021-10-29
PCRE Unicode Version => 14.0.0
PCRE JIT Support => enabled
PCRE JIT Target => x86 64bit (little endian + unaligned)

Directive => Local Value => Master Value
pcre.backtrack_limit => 1000000 => 1000000
pcre.jit => 1 => 1
pcre.recursion_limit => 100000 => 100000

PDO

PDO support => enabled
PDO drivers => mysql, pgsql, sqlite

pdo_mysql

PDO Driver for MySQL => enabled
Client API version => mysqlnd 8.1.2-1ubuntu2.11

Directive => Local Value => Master Value
pdo_mysql.default_socket => /var/run/mysqld/mysqld.sock => /var/run/mysqld/mysqld.sock

pdo_pgsql

PDO Driver for PostgreSQL => enabled
PostgreSQL(libpq) Version => 14.7

pdo_sqlite

PDO Driver for SQLite 3.x => enabled
SQLite Library => 3.37.2

pgsql

PostgreSQL Support => enabled
PostgreSQL (libpq) Version => 14.7
Multibyte character support => enabled
Active Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
pgsql.allow_persistent => On => On
pgsql.auto_reset_persistent => Off => Off
pgsql.ignore_notice => Off => Off
pgsql.log_notice => Off => Off
pgsql.max_links => Unlimited => Unlimited
pgsql.max_persistent => Unlimited => Unlimited

Phar

Phar: PHP Archive support => enabled
Phar API version => 1.1.1
Phar-based phar archives => enabled
Tar-based phar archives => enabled
ZIP-based phar archives => enabled
gzip compression => enabled
bzip2 compression => disabled (install ext/bz2)
Native OpenSSL support => enabled


Phar based on pear/PHP_Archive, original concept by Davey Shafik.
Phar fully realized by Gregory Beaver and Marcus Boerger.
Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.
Directive => Local Value => Master Value
phar.cache_list => no value => no value
phar.readonly => On => On
phar.require_hash => On => On

posix

POSIX support => enabled

readline

Readline Support => enabled
Readline library => EditLine wrapper

Directive => Local Value => Master Value
cli.pager => no value => no value
cli.prompt => \b \>  => \b \>

redis

Redis Support => enabled
Redis Version => 5.3.5
Redis Sentinel Version => 0.1
Available serializers => php, json, igbinary
Available compression => lzf, zstd, lz4

Directive => Local Value => Master Value
redis.arrays.algorithm => no value => no value
redis.arrays.auth => no value => no value
redis.arrays.autorehash => 0 => 0
redis.arrays.connecttimeout => 0 => 0
redis.arrays.consistent => 0 => 0
redis.arrays.distributor => no value => no value
redis.arrays.functions => no value => no value
redis.arrays.hosts => no value => no value
redis.arrays.index => 0 => 0
redis.arrays.lazyconnect => 0 => 0
redis.arrays.names => no value => no value
redis.arrays.pconnect => 0 => 0
redis.arrays.previous => no value => no value
redis.arrays.readtimeout => 0 => 0
redis.arrays.retryinterval => 0 => 0
redis.clusters.auth => no value => no value
redis.clusters.cache_slots => 0 => 0
redis.clusters.persistent => 0 => 0
redis.clusters.read_timeout => 0 => 0
redis.clusters.seeds => no value => no value
redis.clusters.timeout => 0 => 0
redis.pconnect.connection_limit => 0 => 0
redis.pconnect.echo_check_liveness => 1 => 1
redis.pconnect.pool_detect_dirty => 0 => 0
redis.pconnect.pool_pattern => no value => no value
redis.pconnect.pool_poll_timeout => 0 => 0
redis.pconnect.pooling_enabled => 1 => 1
redis.session.lock_expire => 0 => 0
redis.session.lock_retries => 10 => 10
redis.session.lock_wait_time => 2000 => 2000
redis.session.locking_enabled => 0 => 0

Reflection

Reflection => enabled

session

Session Support => enabled
Registered save handlers => files user redis rediscluster
Registered serializer handlers => php_serialize php php_binary igbinary

Directive => Local Value => Master Value
session.auto_start => Off => Off
session.cache_expire => 180 => 180
session.cache_limiter => nocache => nocache
session.cookie_domain => no value => no value
session.cookie_httponly => no value => no value
session.cookie_lifetime => 0 => 0
session.cookie_path => / => /
session.cookie_samesite => no value => no value
session.cookie_secure => 0 => 0
session.gc_divisor => 1000 => 1000
session.gc_maxlifetime => 1440 => 1440
session.gc_probability => 0 => 0
session.lazy_write => On => On
session.name => PHPSESSID => PHPSESSID
session.referer_check => no value => no value
session.save_handler => files => files
session.save_path => /var/lib/php/sessions => /var/lib/php/sessions
session.serialize_handler => php => php
session.sid_bits_per_character => 5 => 5
session.sid_length => 26 => 26
session.upload_progress.cleanup => On => On
session.upload_progress.enabled => On => On
session.upload_progress.freq => 1% => 1%
session.upload_progress.min_freq => 1 => 1
session.upload_progress.name => PHP_SESSION_UPLOAD_PROGRESS => PHP_SESSION_UPLOAD_PROGRESS
session.upload_progress.prefix => upload_progress_ => upload_progress_
session.use_cookies => 1 => 1
session.use_only_cookies => 1 => 1
session.use_strict_mode => 0 => 0
session.use_trans_sid => 0 => 0

shmop

shmop support => enabled

SimpleXML

SimpleXML support => enabled
Schema support => enabled

soap

Soap Client => enabled
Soap Server => enabled

Directive => Local Value => Master Value
soap.wsdl_cache => 1 => 1
soap.wsdl_cache_dir => /tmp => /tmp
soap.wsdl_cache_enabled => On => On
soap.wsdl_cache_limit => 5 => 5
soap.wsdl_cache_ttl => 86400 => 86400

sockets

Sockets Support => enabled

sodium

sodium support => enabled
libsodium headers version => 1.0.18
libsodium library version => 1.0.18

SPL

SPL support => enabled
Interfaces => OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject
Classes => AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException

sqlite3

SQLite3 support => enabled
SQLite Library => 3.37.2

Directive => Local Value => Master Value
sqlite3.defensive => On => On
sqlite3.extension_dir => no value => no value

standard

Dynamic Library Support => enabled
Path to sendmail => /usr/sbin/sendmail -t -i

Directive => Local Value => Master Value
assert.active => On => On
assert.bail => Off => Off
assert.callback => no value => no value
assert.exception => On => On
assert.warning => On => On
auto_detect_line_endings => Off => Off
default_socket_timeout => 60 => 60
from => no value => no value
session.trans_sid_hosts => no value => no value
session.trans_sid_tags => a=href,area=href,frame=src,form= => a=href,area=href,frame=src,form=
unserialize_max_depth => 4096 => 4096
url_rewriter.hosts => no value => no value
url_rewriter.tags => form= => form=
user_agent => no value => no value

sysvmsg

sysvmsg support => enabled

sysvsem

sysvsem support => enabled

sysvshm

sysvshm support => enabled

tokenizer

Tokenizer Support => enabled

xdebug

__   __   _      _
\ \ / /  | |    | |
 \ V / __| | ___| |__  _   _  __ _
  > < / _` |/ _ \ '_ \| | | |/ _` |
 / . \ (_| |  __/ |_) | |_| | (_| |
/_/ \_\__,_|\___|_.__/ \__,_|\__, |
                              __/ |
                             |___/

Version => 3.1.2
Support Xdebug on Patreon, GitHub, or as a business: https://xdebug.org/support

             Enabled Features (through 'xdebug.mode' setting)
Feature => Enabled/Disabled
Development Helpers => ✔ enabled
Coverage => ✘ disabled
GC Stats => ✘ disabled
Profiler => ✘ disabled
Step Debugger => ✘ disabled
Tracing => ✘ disabled

                            Optional Features
Compressed File Support => no
Clock Source => clock_gettime

Directive => Local Value => Master Value
xdebug.auto_trace => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.cli_color => 0 => 0
xdebug.client_discovery_header => no value => no value
xdebug.client_host => localhost => localhost
xdebug.client_port => 9003 => 9003
xdebug.cloud_id => no value => no value
xdebug.collect_assignments => Off => Off
xdebug.collect_includes => (setting removed in Xdebug 3) => (setting removed in Xdebug 3)
xdebug.collect_params => (setting removed in Xdebug 3) => (setting removed in Xdebug 3)
xdebug.collect_return => Off => Off
xdebug.collect_vars => (setting removed in Xdebug 3) => (setting removed in Xdebug 3)
xdebug.connect_timeout_ms => 200 => 200
xdebug.coverage_enable => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.default_enable => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.discover_client_host => Off => Off
xdebug.dump.COOKIE => no value => no value
xdebug.dump.ENV => no value => no value
xdebug.dump.FILES => no value => no value
xdebug.dump.GET => no value => no value
xdebug.dump.POST => no value => no value
xdebug.dump.REQUEST => no value => no value
xdebug.dump.SERVER => no value => no value
xdebug.dump.SESSION => no value => no value
xdebug.dump_globals => On => On
xdebug.dump_once => On => On
xdebug.dump_undefined => Off => Off
xdebug.file_link_format => no value => no value
xdebug.filename_format => no value => no value
xdebug.force_display_errors => Off => Off
xdebug.force_error_reporting => 0 => 0
xdebug.gc_stats_enable => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.gc_stats_output_dir => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.gc_stats_output_name => gcstats.%p => gcstats.%p
xdebug.halt_level => 0 => 0
xdebug.idekey => no value => no value
xdebug.log => no value => no value
xdebug.log_level => 7 => 7
xdebug.max_nesting_level => 256 => 256
xdebug.max_stack_frames => -1 => -1
xdebug.mode => develop => develop
xdebug.output_dir => /tmp => /tmp
xdebug.overload_var_dump => (setting removed in Xdebug 3) => (setting removed in Xdebug 3)
xdebug.profiler_append => Off => Off
xdebug.profiler_enable => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.profiler_enable_trigger => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.profiler_enable_trigger_value => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.profiler_output_dir => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.profiler_output_name => cachegrind.out.%p => cachegrind.out.%p
xdebug.remote_autostart => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_connect_back => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_enable => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_host => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_log => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_log_level => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_mode => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_port => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.remote_timeout => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.scream => Off => Off
xdebug.show_error_trace => Off => Off
xdebug.show_exception_trace => Off => Off
xdebug.show_local_vars => Off => Off
xdebug.show_mem_delta => (setting removed in Xdebug 3) => (setting removed in Xdebug 3)
xdebug.start_upon_error => default => default
xdebug.start_with_request => default => default
xdebug.trace_enable_trigger => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.trace_enable_trigger_value => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.trace_format => 0 => 0
xdebug.trace_options => 0 => 0
xdebug.trace_output_dir => (setting renamed in Xdebug 3) => (setting renamed in Xdebug 3)
xdebug.trace_output_name => trace.%c => trace.%c
xdebug.trigger_value => no value => no value
xdebug.use_compression => 0 => 0
xdebug.var_display_max_children => 128 => 128
xdebug.var_display_max_data => 512 => 512
xdebug.var_display_max_depth => 3 => 3

xml

XML Support => active
XML Namespace Support => active
libxml2 Version => 2.9.13

xmlreader

XMLReader => enabled

xmlwriter

XMLWriter => enabled

xsl

XSL => enabled
libxslt Version => 1.1.34
libxslt compiled against libxml Version => 2.9.13
EXSLT => enabled
libexslt Version => 1.1.34

Zend OPcache

Opcode Caching => Disabled
Optimization => Disabled
SHM Cache => Enabled
File Cache => Disabled
JIT => On
Startup Failed => Opcode Caching is disabled for CLI

Directive => Local Value => Master Value
opcache.blacklist_filename => no value => no value
opcache.consistency_checks => 0 => 0
opcache.dups_fix => Off => Off
opcache.enable => On => On
opcache.enable_cli => Off => Off
opcache.enable_file_override => Off => Off
opcache.error_log => no value => no value
opcache.file_cache => no value => no value
opcache.file_cache_consistency_checks => On => On
opcache.file_cache_only => Off => Off
opcache.file_update_protection => 2 => 2
opcache.force_restart_timeout => 180 => 180
opcache.huge_code_pages => Off => Off
opcache.interned_strings_buffer => 8 => 8
opcache.jit => tracing => tracing
opcache.jit_bisect_limit => 0 => 0
opcache.jit_blacklist_root_trace => 16 => 16
opcache.jit_blacklist_side_trace => 8 => 8
opcache.jit_buffer_size => 0 => 0
opcache.jit_debug => 0 => 0
opcache.jit_hot_func => 127 => 127
opcache.jit_hot_loop => 64 => 64
opcache.jit_hot_return => 8 => 8
opcache.jit_hot_side_exit => 8 => 8
opcache.jit_max_exit_counters => 8192 => 8192
opcache.jit_max_loop_unrolls => 8 => 8
opcache.jit_max_polymorphic_calls => 2 => 2
opcache.jit_max_recursive_calls => 2 => 2
opcache.jit_max_recursive_returns => 2 => 2
opcache.jit_max_root_traces => 1024 => 1024
opcache.jit_max_side_traces => 128 => 128
opcache.jit_prof_threshold => 0.005 => 0.005
opcache.lockfile_path => /tmp => /tmp
opcache.log_verbosity_level => 1 => 1
opcache.max_accelerated_files => 10000 => 10000
opcache.max_file_size => 0 => 0
opcache.max_wasted_percentage => 5 => 5
opcache.memory_consumption => 128 => 128
opcache.opt_debug_level => 0 => 0
opcache.optimization_level => 0x7FFEBFFF => 0x7FFEBFFF
opcache.preferred_memory_model => no value => no value
opcache.preload => no value => no value
opcache.preload_user => no value => no value
opcache.protect_memory => Off => Off
opcache.record_warnings => Off => Off
opcache.restrict_api => no value => no value
opcache.revalidate_freq => 2 => 2
opcache.revalidate_path => Off => Off
opcache.save_comments => On => On
opcache.use_cwd => On => On
opcache.validate_permission => Off => Off
opcache.validate_root => Off => Off
opcache.validate_timestamps => On => On

zip

Zip => enabled
Zip version => 1.19.5
Libzip version => 1.7.3
BZIP2 compression => Yes
XZ compression => No
ZSTD compression => No
AES-128 encryption => Yes
AES-192 encryption => Yes
AES-256 encryption => Yes

zlib

ZLib Support => enabled
Stream Wrapper => compress.zlib://
Stream Filter => zlib.inflate, zlib.deflate
Compiled Version => 1.2.11
Linked Version => 1.2.11

Directive => Local Value => Master Value
zlib.output_compression => Off => Off
zlib.output_compression_level => -1 => -1
zlib.output_handler => no value => no value

Additional Modules

Module Name

Environment

Variable => Value
SHELL => /bin/bash
SESSION_MANAGER => local/pc-gaming:@/tmp/.ICE-unix/3029,unix/pc-gaming:/tmp/.ICE-unix/3029
QT_ACCESSIBILITY => 1
SNAP_REVISION => 326
XDG_CONFIG_DIRS => /etc/xdg/xdg-xubuntu:/etc/xdg:/etc/xdg
XDG_SESSION_PATH => /org/freedesktop/DisplayManager/Session0
NVM_INC => /home/yao/.nvm/versions/node/v19.8.1/include/node
XDG_MENU_PREFIX => xfce-
CLUTTER_BACKEND => x11
SNAP_REAL_HOME => /home/yao
TERMINAL_EMULATOR => JetBrains-JediTerm
SNAP_USER_COMMON => /home/yao/snap/phpstorm/common
LANGUAGE => en
LC_ADDRESS => ru_RU.UTF-8
LC_NAME => ru_RU.UTF-8
SSH_AUTH_SOCK => /run/user/1000/keyring/ssh
TERM_SESSION_ID => f040a04b-f7a3-4250-98c2-d048e9c4741e
SNAP_INSTANCE_KEY =>
DESKTOP_SESSION => xubuntu
LC_MONETARY => ru_RU.UTF-8
BAMF_DESKTOP_FILE_HINT => /var/lib/snapd/desktop/applications/phpstorm_phpstorm.desktop
XDG_SEAT => seat0
PWD => /home/yao/Desktop/PHP/IgorBorisov/PHPLevel1/mysite.local
XDG_SESSION_DESKTOP => xubuntu
LOGNAME => yao
QT_QPA_PLATFORMTHEME => gtk2
XDG_SESSION_TYPE => x11
GPG_AGENT_INFO => /run/user/1000/gnupg/S.gpg-agent:0:1
XAUTHORITY => /home/yao/.Xauthority
DESKTOP_STARTUP_ID => Thunar-3196-pc-gaming-env-0_TIME4409745
SNAP_CONTEXT => z6nzdOUDJNUeSxiI4jp-1v9_nMjZnJ5cIecaT-gjazGO1AeCU_s3
XDG_GREETER_DATA_DIR => /var/lib/lightdm-data/yao
GDM_LANG => en
HOME => /home/yao
LANG => en_US.UTF-8
LC_PAPER => ru_RU.UTF-8
LS_COLORS => rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.webp=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:
XDG_CURRENT_DESKTOP => XFCE
SNAP_ARCH => amd64
SNAP_INSTANCE_NAME => phpstorm
SNAP_USER_DATA => /home/yao/snap/phpstorm/326
XDG_SEAT_PATH => /org/freedesktop/DisplayManager/Seat0
SNAP_REEXEC =>
NVM_DIR => /home/yao/.nvm
LESSCLOSE => /usr/bin/lesspipe %s %s
XDG_SESSION_CLASS => user
TERM => xterm-256color
LC_IDENTIFICATION => ru_RU.UTF-8
GTK_OVERLAY_SCROLLING => 0
LESSOPEN => | /usr/bin/lesspipe %s
USER => yao
SNAP => /snap/phpstorm/326
SNAP_COMMON => /var/snap/phpstorm/common
SNAP_VERSION => 2022.2.5
DISPLAY => :0
SHLVL => 1
NVM_CD_FLAGS =>
SNAP_LIBRARY_PATH => /var/lib/snapd/lib/gl:/var/lib/snapd/lib/gl32:/var/lib/snapd/void
SNAP_COOKIE => z6nzdOUDJNUeSxiI4jp-1v9_nMjZnJ5cIecaT-gjazGO1AeCU_s3
LC_TELEPHONE => ru_RU.UTF-8
LC_MEASUREMENT => ru_RU.UTF-8
XDG_VTNR => 7
XDG_SESSION_ID => c2
PAPERSIZE => a4
SNAP_DATA => /var/snap/phpstorm/326
XDG_RUNTIME_DIR => /run/user/1000
LC_TIME => ru_RU.UTF-8
SNAP_NAME => phpstorm
XDG_DATA_DIRS => /usr/share/xubuntu:/usr/share/xfce4:/usr/local/share:/usr/share:/var/lib/snapd/desktop:/usr/share
PATH => /home/yao/.nvm/versions/node/v19.8.1/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
GDMSESSION => xubuntu
DBUS_SESSION_BUS_ADDRESS => unix:path=/run/user/1000/bus
NVM_BIN => /home/yao/.nvm/versions/node/v19.8.1/bin
GIO_LAUNCHED_DESKTOP_FILE_PID => 32589
GIO_LAUNCHED_DESKTOP_FILE => /var/lib/snapd/desktop/applications/phpstorm_phpstorm.desktop
LC_NUMERIC => ru_RU.UTF-8
_ => /usr/bin/php

PHP Variables

Variable => Value
$_SERVER['SHELL'] => /bin/bash
$_SERVER['SESSION_MANAGER'] => local/pc-gaming:@/tmp/.ICE-unix/3029,unix/pc-gaming:/tmp/.ICE-unix/3029
$_SERVER['QT_ACCESSIBILITY'] => 1
$_SERVER['SNAP_REVISION'] => 326
$_SERVER['XDG_CONFIG_DIRS'] => /etc/xdg/xdg-xubuntu:/etc/xdg:/etc/xdg
$_SERVER['XDG_SESSION_PATH'] => /org/freedesktop/DisplayManager/Session0
$_SERVER['NVM_INC'] => /home/yao/.nvm/versions/node/v19.8.1/include/node
$_SERVER['XDG_MENU_PREFIX'] => xfce-
$_SERVER['CLUTTER_BACKEND'] => x11
$_SERVER['SNAP_REAL_HOME'] => /home/yao
$_SERVER['TERMINAL_EMULATOR'] => JetBrains-JediTerm
$_SERVER['SNAP_USER_COMMON'] => /home/yao/snap/phpstorm/common
$_SERVER['LANGUAGE'] => en
$_SERVER['LC_ADDRESS'] => ru_RU.UTF-8
$_SERVER['LC_NAME'] => ru_RU.UTF-8
$_SERVER['SSH_AUTH_SOCK'] => /run/user/1000/keyring/ssh
$_SERVER['TERM_SESSION_ID'] => f040a04b-f7a3-4250-98c2-d048e9c4741e
$_SERVER['SNAP_INSTANCE_KEY'] =>
$_SERVER['DESKTOP_SESSION'] => xubuntu
$_SERVER['LC_MONETARY'] => ru_RU.UTF-8
$_SERVER['BAMF_DESKTOP_FILE_HINT'] => /var/lib/snapd/desktop/applications/phpstorm_phpstorm.desktop
$_SERVER['XDG_SEAT'] => seat0
$_SERVER['PWD'] => /home/yao/Desktop/PHP/IgorBorisov/PHPLevel1/mysite.local
$_SERVER['XDG_SESSION_DESKTOP'] => xubuntu
$_SERVER['LOGNAME'] => yao
$_SERVER['QT_QPA_PLATFORMTHEME'] => gtk2
$_SERVER['XDG_SESSION_TYPE'] => x11
$_SERVER['GPG_AGENT_INFO'] => /run/user/1000/gnupg/S.gpg-agent:0:1
$_SERVER['XAUTHORITY'] => /home/yao/.Xauthority
$_SERVER['DESKTOP_STARTUP_ID'] => Thunar-3196-pc-gaming-env-0_TIME4409745
$_SERVER['SNAP_CONTEXT'] => z6nzdOUDJNUeSxiI4jp-1v9_nMjZnJ5cIecaT-gjazGO1AeCU_s3
$_SERVER['XDG_GREETER_DATA_DIR'] => /var/lib/lightdm-data/yao
$_SERVER['GDM_LANG'] => en
$_SERVER['HOME'] => /home/yao
$_SERVER['LANG'] => en_US.UTF-8
$_SERVER['LC_PAPER'] => ru_RU.UTF-8
$_SERVER['LS_COLORS'] => rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.webp=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:
$_SERVER['XDG_CURRENT_DESKTOP'] => XFCE
$_SERVER['SNAP_ARCH'] => amd64
$_SERVER['SNAP_INSTANCE_NAME'] => phpstorm
$_SERVER['SNAP_USER_DATA'] => /home/yao/snap/phpstorm/326
$_SERVER['XDG_SEAT_PATH'] => /org/freedesktop/DisplayManager/Seat0
$_SERVER['SNAP_REEXEC'] =>
$_SERVER['NVM_DIR'] => /home/yao/.nvm
$_SERVER['LESSCLOSE'] => /usr/bin/lesspipe %s %s
$_SERVER['XDG_SESSION_CLASS'] => user
$_SERVER['TERM'] => xterm-256color
$_SERVER['LC_IDENTIFICATION'] => ru_RU.UTF-8
$_SERVER['GTK_OVERLAY_SCROLLING'] => 0
$_SERVER['LESSOPEN'] => | /usr/bin/lesspipe %s
$_SERVER['USER'] => yao
$_SERVER['SNAP'] => /snap/phpstorm/326
$_SERVER['SNAP_COMMON'] => /var/snap/phpstorm/common
$_SERVER['SNAP_VERSION'] => 2022.2.5
$_SERVER['DISPLAY'] => :0
$_SERVER['SHLVL'] => 1
$_SERVER['NVM_CD_FLAGS'] =>
$_SERVER['SNAP_LIBRARY_PATH'] => /var/lib/snapd/lib/gl:/var/lib/snapd/lib/gl32:/var/lib/snapd/void
$_SERVER['SNAP_COOKIE'] => z6nzdOUDJNUeSxiI4jp-1v9_nMjZnJ5cIecaT-gjazGO1AeCU_s3
$_SERVER['LC_TELEPHONE'] => ru_RU.UTF-8
$_SERVER['LC_MEASUREMENT'] => ru_RU.UTF-8
$_SERVER['XDG_VTNR'] => 7
$_SERVER['XDG_SESSION_ID'] => c2
$_SERVER['PAPERSIZE'] => a4
$_SERVER['SNAP_DATA'] => /var/snap/phpstorm/326
$_SERVER['XDG_RUNTIME_DIR'] => /run/user/1000
$_SERVER['LC_TIME'] => ru_RU.UTF-8
$_SERVER['SNAP_NAME'] => phpstorm
$_SERVER['XDG_DATA_DIRS'] => /usr/share/xubuntu:/usr/share/xfce4:/usr/local/share:/usr/share:/var/lib/snapd/desktop:/usr/share
$_SERVER['PATH'] => /home/yao/.nvm/versions/node/v19.8.1/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
$_SERVER['GDMSESSION'] => xubuntu
$_SERVER['DBUS_SESSION_BUS_ADDRESS'] => unix:path=/run/user/1000/bus
$_SERVER['NVM_BIN'] => /home/yao/.nvm/versions/node/v19.8.1/bin
$_SERVER['GIO_LAUNCHED_DESKTOP_FILE_PID'] => 32589
$_SERVER['GIO_LAUNCHED_DESKTOP_FILE'] => /var/lib/snapd/desktop/applications/phpstorm_phpstorm.desktop
$_SERVER['LC_NUMERIC'] => ru_RU.UTF-8
$_SERVER['_'] => /usr/bin/php
$_SERVER['PHP_SELF'] => info.php
$_SERVER['SCRIPT_NAME'] => info.php
$_SERVER['SCRIPT_FILENAME'] => info.php
$_SERVER['PATH_TRANSLATED'] => info.php
$_SERVER['DOCUMENT_ROOT'] =>
$_SERVER['REQUEST_TIME_FLOAT'] => 1681669460.1513
$_SERVER['REQUEST_TIME'] => 1681669460
$_SERVER['argv'] => Array
(
    [0] => info.php
)

$_SERVER['argc'] => 1


 _______________________________________________________________________

PHP Credits

PHP Group
Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski

Language Design & Concept
Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger

                               PHP Authors
Contribution => Authors
Zend Scripting Language Engine => Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov
Extension Module API => Andi Gutmans, Zeev Suraski, Andrei Zmievski
UNIX Build and Modularization => Stig Bakken, Sascha Schumann, Jani Taskinen, Peter Kokot
Windows Support => Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski, Kalle Sommer Nielsen
Server API (SAPI) Abstraction Layer => Andi Gutmans, Shane Caraveo, Zeev Suraski
Streams Abstraction Layer => Wez Furlong, Sara Golemon
PHP Data Objects Layer => Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky
Output Handler => Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner
Consistent 64 bit support => Anthony Ferrara, Anatol Belski

                               SAPI Modules
Contribution => Authors
Apache 2.0 Handler => Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code)
CGI / FastCGI => Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov
CLI => Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui
Embed => Edin Kadribasic
FastCGI Process Manager => Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet
litespeed => George Wang
phpdbg => Felipe Pena, Joe Watkins, Bob Weinand

                              Module Authors
Module => Authors
BC Math => Andi Gutmans
Bzip2 => Sterling Hughes
Calendar => Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong
COM and .Net => Wez Furlong
ctype => Hartmut Holzgraefe
cURL => Sterling Hughes
Date/Time Support => Derick Rethans
DB-LIB (MS SQL, Sybase) => Wez Furlong, Frank M. Kromann, Adam Baratz
DBA => Sascha Schumann, Marcus Boerger
DOM => Christian Stocker, Rob Richards, Marcus Boerger
enchant => Pierre-Alain Joye, Ilia Alshanetsky
EXIF => Rasmus Lerdorf, Marcus Boerger
FFI => Dmitry Stogov
fileinfo => Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans, Anatol Belski
Firebird driver for PDO => Ard Biesheuvel
FTP => Stefan Esser, Andrew Skalski
GD imaging => Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger, Mark Randall
GetText => Alex Plotnick
GNU GMP support => Stanislav Malyshev
Iconv => Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi
IMAP => Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky
Input Filter => Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky
Internationalization => Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar
JSON => Jakub Zelenka, Omar Kilani, Scott MacVicar
LDAP => Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas
LIBXML => Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo
Multibyte String Functions => Tsukada Takuya, Rui Hirokawa
MySQL driver for PDO => George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter
MySQLi => Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel
MySQLnd => Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter
OCI8 => Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, Wez Furlong, Christopher Jones, Oracle Corporation
ODBC driver for PDO => Wez Furlong
ODBC => Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky
Opcache => Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Dmitry Stogov, Xinchen Hui
OpenSSL => Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar, Eliot Lear
Oracle (OCI) driver for PDO => Wez Furlong
pcntl => Jason Greene, Arnaud Le Blanc
Perl Compatible Regexps => Andrei Zmievski
PHP Archive => Gregory Beaver, Marcus Boerger
PHP Data Objects => Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky
PHP hash => Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar
Posix => Kristian Koehntopp
PostgreSQL driver for PDO => Edin Kadribasic, Ilia Alshanetsky
PostgreSQL => Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne
Pspell => Vlad Krupin
Readline => Thies C. Arntzen
Reflection => Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter
Sessions => Sascha Schumann, Andrei Zmievski
Shared Memory Operations => Slava Poliakov, Ilia Alshanetsky
SimpleXML => Sterling Hughes, Marcus Boerger, Rob Richards
SNMP => Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin
SOAP => Brad Lafountain, Shane Caraveo, Dmitry Stogov
Sockets => Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene
Sodium => Frank Denis
SPL => Marcus Boerger, Etienne Kneuss
SQLite 3.x driver for PDO => Wez Furlong
SQLite3 => Scott MacVicar, Ilia Alshanetsky, Brad Dewar
System V Message based IPC => Wez Furlong
System V Semaphores => Tom May
System V Shared Memory => Christian Cartus
tidy => John Coggeshall, Ilia Alshanetsky
tokenizer => Andrei Zmievski, Johannes Schlueter
XML => Stig Bakken, Thies C. Arntzen, Sterling Hughes
XMLReader => Rob Richards
XMLWriter => Rob Richards, Pierre-Alain Joye
XSL => Christian Stocker, Rob Richards
Zip => Pierre-Alain Joye, Remi Collet
Zlib => Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner

                            PHP Documentation
Authors => Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Philip Olson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey
Editor => Peter Cowburn
User Note Maintainers => Daniel P. Brown, Thiago Henrique Pojda
Other Contributors => Previously active authors, editors and other contributors are listed in the manual.

PHP Quality Assurance Team
Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs

                     Websites and Infrastructure team
PHP Websites Team => Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison
Event Maintainers => Damien Seguy, Daniel P. Brown
Network Infrastructure => Daniel P. Brown
Windows Infrastructure => Alex Schoenmaker

                             Debian Packaging
Ondřej Surý

PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.
*/
?>