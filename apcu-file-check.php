<?php
# - Use this function to check if a file in the server has been 
#   cached by apcu
function is_file_cached($file) 
{
    $cacheinfo = apcu_cache_info();
    foreach ($cacheinfo['cache_list'] as $cache) 
    {
        if ($cache['filename'] == $file) return true;
    }
    return "The inquired file is not cached.";
}



# - use this function to display the whole cache. 
# - IMPORTANT: don't use this in a production server, since the cache
#              information wll be huge. Only use this function in a 
#              test server without any real traffic. 
function show_cached() {
	echo "<pre>";
	print_r( apcu_cache_info());
	echo "<pre>";
}



?>