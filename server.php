PHP_SELF
---------
<?php
echo $_SERVER['PHP_SELF'];
?>
<BR>
	GATEWAY_INTERFACE
	------------------
<?php
echo $_SERVER['GATEWAY_INTERFACE'];
?>
<br>
SERVER_ADDR
------------
<?PHP
echo $_SERVER['SERVER_ADDR'];
?>
<Br>
	SERVER_NAME
	------------
	<?PHP
ECHO $_SERVER['SERVER_NAME'];
	?>
	<BR>
	SERVER_SOFTWARE
	----------------
	<?PHP
ECHO $_SERVER['SERVER_SOFTWARE'];
	?>
	<BR>
		SERVER_PROTOCOL
		---------------
		<?PHP
ECHO $_SERVER['SERVER_PROTOCOL'];
		?>
		<BR>
			REQUEST_METHOD
			---------------
			<?PHP
ECHO $_SERVER['REQUEST_METHOD'];
?>
<BR>
	REQUEST_TIME
	------------
	<?PHP
ECHO $_SERVER['REQUEST_TIME'];
	?>
	<BR>
		REQUEST_TIME_FLOAT
		------------------
		<?PHP
ECHO $_SERVER['REQUEST_TIME_FLOAT'];
?>
<BR>
	QUERY_STRING
	--------------
	<?PHP
ECHO $_SERVER['QUERY_STRING'];
	?>
	<BR>
	DOCUMENT_ROOT
	--------------
	<?PHP
ECHO $_SERVER['DOCUMENT_ROOT'];
	?>
	<BR>
	HTTP_ACCEPT
	----------
	<?PHP
ECHO $_SERVER['HTTP_ACCEPT'];
	?>
	<BR>
		HTTP_ACCEPT_CHARSET
		---------------------
		<?PHP
ECHO $_SERVER['HTTP_ACCEPT_CHARSET'];
		?>
		<BR>
			HTTP_ACCEPT_ENCODING
			---------------------
			<?PHP
ECHO $_SERVER['HTTP_ACCEPT_ENCODING'];
			?>
			<BR>
				HTTP_ACCEPT_LANGUAGE
				---------------------
				<?PHP
ECHO $_SERVER['HTTP_ACCEPT_LANGUAGE'];
				?>
				<BR>
				HTTP_CONNECTION
				----------------
				<?PHP
ECHO $_SERVER['HTTP_CONNECTION'];
				?>
				<BR>
				HTTP_HOST
				----------
				<?PHP
ECHO $_SERVER['HTTP_HOST'];
				?>
				<BR>
					HTTP_REFERER
					--------------
					<?PHP
ECHO $_SERVER['HTTP_REFERER'];
					?>
					HTTP_USER_AGENT
					---------------
					<?PHP
ECHO $_SERVER['HTTP_USER_AGENT'];
					?>
					<BR>
					HTTPS
					-------
					<?PHP
ECHO $_SERVER['HTTPS'];
					?>
					REMOTE_ADDR
					------------
					<?PHP
ECHO $_SERVER['REMOTE_ADDR'];
					?>
					<BR>
						REMOTE_HOST
						------------
						<?PHP
ECHO $_SERVER['REMOTE_HOST'];
						?>
						<BR>
							gethostbyaddr
							-------------
							<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $hostname;
?>
<br>
gethostbynamel
---------------
<?php
$hosts = gethostbynamel('www.fb.com');
print_r($hosts);
?>
<br>
gethostbyname
--------------
<?php
$ip = gethostbyname('www.fb.com');
echo $ip;
?>
<br>
dns_get_record
---------------
<?php
$result = dns_get_record("php.net");
print_r($result);
?>
<br>
REMOTE_PORT
-------------
<?PHP
ECHO $_SERVER['REMOTE_PORT'];
?>
<br>
<?php
ECHO $_SERVER['redirect_url'];
?>