<div>
    <div class="sidebar">
        <livewire:sidebar />
    </div>
    <div class="main-content">
        <h1>Welcome to the Dashboard</h1>
        <!-- Your main content goes here -->
        <form wire:submit.prevent="logout">
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
