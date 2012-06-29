; <?php exit(); __halt_compiler(); ?>
;
; Copy this file to your application and set
; define.AZURE_CONFIG option in /app/core.ini.php
; to it's file name.
;
; Check windows.azure.com for your data.
;

; table store for sessions
[sessions]
account = "cascade"
key = "HFOsdCPISeBjOYJSVOhpAbNzlrfOos//hF3mX20AX4dVsmMUZs1VxJzZTnd45CIH58kQq7OO8ZNEVz4u3JSk6A=="
table = "sessions"

[data]
account = "cascade"
key = "HFOsdCPISeBjOYJSVOhpAbNzlrfOos//hF3mX20AX4dVsmMUZs1VxJzZTnd45CIH58kQq7OO8ZNEVz4u3JSk6A=="
container = "data"
blob_url = "cascade.blob.core.windows.net"
public = true

[var]
account = "cascade"
key = "HFOsdCPISeBjOYJSVOhpAbNzlrfOos//hF3mX20AX4dVsmMUZs1VxJzZTnd45CIH58kQq7OO8ZNEVz4u3JSk6A=="
container = "var"
blob_url = "cascade.blob.core.windows.net"
public = false

[block]
account = "cascade"
key = "HFOsdCPISeBjOYJSVOhpAbNzlrfOos//hF3mX20AX4dVsmMUZs1VxJzZTnd45CIH58kQq7OO8ZNEVz4u3JSk6A=="
container = "block"
blob_url = "cascade.blob.core.windows.net"
public = false


; vim:filetype=dosini:

