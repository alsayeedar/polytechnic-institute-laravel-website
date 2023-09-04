@extends('admin.layout')

@section('title', "Footer Menu - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Footer Menu</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Footer Menu</li>
</ol>
<form method="POST" action="{{ route("admin.menus.footer") }}">
    @csrf
    <input type="hidden" id="menudata" name="menudata" value=""/>
</form>
<div class="row">
    @if ($errors->any())
    <div class="col-md-12">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="m-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
    @endif
    @if (session("success"))
    <div class="col-md-12">
        <div class="alert alert-success">
            <p class="m-0">{{ session("success") }}</p>
        </div>
    </div>
    @endif
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex flex-row justify-content-between">
                <span>Footer Menu</span>
                <button class="btn btn-sm btn-primary" id="storebutton">Save</button>
            </div>
            <div class="card-body">
                <div id="element-id"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">Edit</div>
            <div class="card-body">
              <div class="mb-3">
                <label for="txtText" class="form-label">Text</label>
                <input type="text" class="form-control" id="txtText" placeholder="text">
              </div>
              <div class="mb-3">
                <label for="txtHref" class="form-label">URL/Path</label>
                <input type="text" class="form-control" id="txtHref" placeholder="URL/Path">
              </div>
            </div>
            <div class="card-footer">
              <button id="btnUpdate" class="btn btn-secondary" disabled="">
                <i class="fa-solid fa-rotate"></i> Update
              </button>
              <button id="btnAdd" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i> Add
              </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customstyle')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/davicotico/Menu-Editor@1.1.0/dist/styles.min.css"/>
@endsection
@section('customscript')
<script src="{{ asset("assets/admin/js/menu-editor.min.js") }}"></script>
<script>
   var itemTextInput = document.getElementById("txtText"),
    itemHrefInput = document.getElementById("txtHref"),
    R = document.getElementById("btnUpdate"),
    menudata = document.getElementById("menudata"),
    storebutton = document.getElementById("storebutton");
    form = document.querySelector("form");
	var menuEditor = new MenuEditor('element-id', { maxLevel: 0 });
    var nestedData = {!! $menu !!}
    menuEditor.onClickDelete((event) => {
        if (confirm('Do you want to delete the item ' + event.item.getDataset().text)) {
            event.item.remove();
        }
    });
    menuEditor.onClickEdit((t) => {
        let e = t.item,
        n = e.getDataset();
        itemTextInput.value = n.text,
        itemHrefInput.value = n.href,
        menuEditor.edit(t.item),
        R == null || R.removeAttribute("disabled");
    });
    function ze() {
        itemHrefInput.value = "";
        itemTextInput.value = "";
    }
    var xe;
    (xe = document.getElementById("btnAdd")) == null || xe.addEventListener("click", ()=>{
        let t = {
            text: itemTextInput.value,
            href: itemHrefInput.value,
            icon: "",
            tooltip: ""
        };
        menuEditor.add(t),
        R == null || R.setAttribute("disabled", "true"),
        ze();
    });
    R == null || R.addEventListener("click", ()=>{
        let t = {
            text: itemTextInput.value,
            href: itemHrefInput.value,
            icon: "",
            tooltip: ""
        };
        menuEditor.update(t),
        R.setAttribute("disabled", "true"),
        ze();
    });
    menuEditor.setArray(nestedData);
    menuEditor.mount();
    storebutton.addEventListener("click", () => {
        menudata.value = menuEditor.getString();
        form.submit();
    });
</script>
@endsection