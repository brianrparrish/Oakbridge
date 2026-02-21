<x-mail::message>
# New Contact Form Submission

**From:** {{ $name }}

**Email:** {{ $email }}

**Phone:** {{ $phone }}

**Company:** {{ $company }}

---

**Message:**

{{ $contactMessage }}

---

<x-mail::button :url="'mailto:' . $email">
Reply to {{ $name }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
