<?php
header('Content-Type: audio/x-mpegurl');
echo "#EXTM3U\n";
echo "#EXTINF:-1 group-title="Nasional" tvg-id="TVRINasional.id" tvg-logo="https://iptv.urfan.web.id/logo/tvrisport.png",TVRI Sport\n";
echo "http://wpc.d1627.nucdn.net/80D1627/o-tvri/Content/HLS/Live/Channel(TVRI4)/stream3/streamPlaylist.m3u8?expires=24h\n";
?>
