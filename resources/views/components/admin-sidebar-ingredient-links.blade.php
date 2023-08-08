<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIngredient"
        aria-expanded="true" aria-controls="collapseIngredient">
        <i class="fas fa-fw fa-cog"></i>
        <span>Ingredients</span>
    </a>
    <div id="collapseIngredient" class="collapse" aria-labelledby="headingIngredient" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ingredients</h6>
            <a class="collapse-item" href="{{ route('ingredient.create') }}">Create a Ingredient</a>
            <a class="collapse-item" href="{{ route('ingredient.index') }}">View All Ingredients</a>
        </div>
    </div>
</li>
