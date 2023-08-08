<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseItem" aria-expanded="true"
        aria-controls="collapseItem">
        <i class="fas fa-fw fa-cog"></i>
        <span>Items</span>
    </a>
    <div id="collapseItem" class="collapse" aria-labelledby="headingItem" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories</h6>
            <a class="collapse-item" href="{{ route('item.create') }}">Create a Item</a>
            <a class="collapse-item" href="{{ route('item.index') }}">View All Items</a>
        </div>
    </div>
</li>
