@extends('hyra-network.layouts.app')

@section('content')
    @include('hyra-network.home.components.hero')
    @include('hyra-network.home.components.listNFT', ['listNft' => $listNft])
    @include('hyra-network.home.components.Exclusive')
    @include('hyra-network.home.components.Overview', ['listOverview' => $listOverview])
    @include('hyra-network.home.components.Benefits')
    @include('hyra-network.home.components.ListNFTFooter')
@endsection