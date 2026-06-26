@extends('layouts.app')

@section('title', 'Clínica Vida Plena — Atención Médica de Calidad en Venezuela')
@section('description', 'Más de 15 años cuidando familias venezolanas con medicina de calidad, tecnología moderna y un equipo comprometido con tu bienestar. Agenda tu cita hoy.')
@section('og_title', 'Clínica Vida Plena — Atención Médica de Calidad')
@section('og_description', 'Agenda tu cita en Clínica Vida Plena. 8 especialidades médicas, +2000 pacientes atendidos, Caracas, Venezuela.')

@section('content')
    @include('sections.header')
    @include('sections.hero')
    @include('sections.trust-bar')
    @include('sections.services')
    @include('sections.team')
    @include('sections.testimonials')
    @include('sections.contact')
    @include('sections.footer')
@endsection
