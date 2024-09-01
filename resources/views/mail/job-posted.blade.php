<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job has been successfully posted in our website.
</p>

<p>
    <a href="{{ url('/jobs/'.$job->id) }}">View Your Job Listing</a>
</p>

