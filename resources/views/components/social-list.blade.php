@foreach ($socials as $social)
    <x-social-li 
        :name="$social->name"
        :link="$social->link"
        :type="$social->type"
    />
@endforeach