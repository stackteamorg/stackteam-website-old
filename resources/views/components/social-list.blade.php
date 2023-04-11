<ul>
    @foreach ($socials as $social)
        <x-social-li 
            :name="$social->name"
            :link="$social->link"
            :type="'assets/images/icon/'.$social->type.'.svg'"
        />
    @endforeach
</ul>