@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Tazkarti')
<img src="{{ asset('assets/images/pageLogo.png') }}" class="logo" alt="Tazkarti Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
