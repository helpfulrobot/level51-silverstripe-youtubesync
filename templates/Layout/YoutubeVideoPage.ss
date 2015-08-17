<% if $YoutubeVideos %>
    <% loop $YoutubeVideos %>
        <div class="youtube-video">
            <h2>$Title</h2>
            <p>$Description</p>
            $Iframe
        </div>
    <% end_loop %>
<% end_if %>