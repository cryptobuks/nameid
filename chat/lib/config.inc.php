<?php
/*
    NameID, a namecoin based OpenID identity provider.
    Copyright (C) 2014 by Daniel Kraft <d@domob.eu>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/* Configuration variables are set here.  */

/* Maximal messages to send to new chat clients.  */
$maximalMessages = 10;

/* Time in seconds between refresh calls from clients.  */
$refreshTime = 5;

/* Database configuration.  */
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "namechat";

/* Connection settings to namecoind.  */
$rpcHost = "localhost";
$rpcPort = 8336;
$rpcUser = "daniel";
$rpcPassword = "password";

/* Namespace used for name lookups.  */
$namePrefix = "id";

/* Name to use for session.  */
$sessionName = "namechat_login";

/* URL of the server running this NameID instance.  */
$serverUri = "http://localhost:8080/namechat/";

/* Number of random bytes to use for the nonce.  */
$nonceBytes = 16;

?>
