<x-layout page="Login" >

    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Já possui conta? Faça Login
        </a>
       
    </x-slot:btn>
    Tela de Login
    <a href="{{ route('home') }}" class="btn btn-primary">
    Voltar para pagina inicial
    </a>
</x-layout>