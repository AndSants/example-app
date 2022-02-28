{{ $slot }}
<form action="{{ route('site.contact') }}" method="post">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    {{ $errors->has('name') ? $errors->first('name') : '' }}
    <br>
    <input name="telephone" value="{{ old('telephone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    {{ $errors->has('telephone') ? $errors->first('telephone') : '' }}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="select_options_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($reason_contacts as $key => $reason_contact)
            <option value="{{$reason_contact->id}}" {{ old('select_options_id') == $reason_contact->id ? 'selected' : '' }}>
                {{$reason_contact->option}}
            </option>
        @endforeach
    </select>
    {{ $errors->has('select_options_id') ? $errors->first('select_options_id') : '' }}
    <br>
    <textarea name="message" value="{{ old('message') }}" class="{{ $classe }}">{{ (old('message') != '') ? old('message') : 'Preencha aqui a sua mensagem' }}</textarea>
    {{ $errors->has('message') ? $errors->first('message') : '' }}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if ($errors->any())
<div style="position:absolute; top:0px; left:0px; width:100%; background:red;">
    @foreach ($errors->all() as $erro)
        {{ $erro }}
        <br/>
    @endforeach
</div>
@endif

{{-- {{ print_r($errors) }} variável do blade --}}
{{-- value"{{ old('name') }}" função do blade --}}
