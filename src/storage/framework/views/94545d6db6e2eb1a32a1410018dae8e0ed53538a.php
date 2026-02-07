<style>
    .stars {
        display: flex;
        font-size: 30px;
        cursor: pointer;
    }
    .star {
        color:gray;
    }
    .star .filled {
        color:yellow;
    }
</style>
<div>
    <div>
        <div>
            <button 
                wire:click="setRating(<?php echo e($rating); ?>)">Rating値変更</button>
        </div>
        <div><p>選択された評価：<?php echo e($point); ?></p></div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/livewire/rating.blade.php ENDPATH**/ ?>