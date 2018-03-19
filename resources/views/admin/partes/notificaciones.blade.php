<li role="presentation" class="dropdown animated bounce">
    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-bell-o"></i>
        <span class="label label-success">{{ $presupuestos->count() }}</span>
    </a>
    <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
        <span>
            <span><h4 class="text-facebook">Hay clientes que solicitaron productos</h4></span>
        </span>
        <li>
            <a href="">
                <i class="fa fa-users text-aqua"></i> Existen un TOTAL de {{ $presupuestos->count() }} Presupuestos nuevos recibidos.
            </a>
        </li>
        <li>
        @foreach($presupuestos->where('estado','pendiente') as $presupuesto)
            {{-- $lineas_presupuesto = \App\LineaPresupuesto::where('presupuesto_id',$presupuesto->id)->get() --}}
{{\Carbon\Carbon::setLocale('es') }}


                        <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá señar la totalidad del pedido o realizar la entrega del pedido" onclick="" class="btn btn-info">
                            <span class="message">
                                <h5 class="text-filter-box"><b>El cliente {{$presupuesto->user->name}} solicito</b> ({{$presupuesto->created_at->diffForHumans()}}) </h5>
                            </span>
                        </a>


        @endforeach
        </li>
    </ul>
</li>