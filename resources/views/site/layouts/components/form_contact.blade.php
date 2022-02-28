{{ $slot }}
<form action="{{ route('site.contact') }}" method="post">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telephone" value="{{ old('telephone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="reason_contact" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($reason_contacts as $key => $reason_contact)
            <option value="{{$reason_contact->id}}" {{ old('reason_contact') == $reason_contact->id ? 'selected' : '' }}>
                {{$reason_contact->option}}
            </option>
        @endforeach
    </select>
    <br>
    <textarea name="message" value="{{ old('message') }}" class="{{ $classe }}">{{ (old('message') != '') ? old('message') : 'Preencha aqui a sua mensagem' }}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position:absolute; top:0px; left:0px; width:100%; background:red;">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>


{{-- {{ print_r($errors) }} variável do blade --}}
{{-- value"{{ old('name') }}" função do blade --}}
