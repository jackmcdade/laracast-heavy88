<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class QuoteFetcher extends Tags
{
    /**
     * The {{ quote_fetcher }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $quotes = collect([
            ['author' => 'Ron Swanson', 'quotes' => [
                "There’s only one thing I hate more than lying: skim milk. Which is water that’s lying about being milk.",
                "Dear frozen yogurt, you are the celery of desserts. Be ice cream, or be nothing.",
                "When I eat, it is the food that is scared.",
                "Don’t start chasing applause and acclaim. That way lies madness.",
                "If there were more food and fewer people, this would be a perfect party."
                ]
            ],
            ['author' => 'Tom Havaford', 'quotes' => [
                "I'm awesome at being humble.",
                "When I bet on horses, I never lose. Why? I bet on all the horses."
            ]]
        ]);

        $author = $this->params->get('author', 'Ron Swanson');

        $filtered_quotes = $quotes->where('author', $author)->first();

        return $filtered_quotes['quotes'][array_rand($filtered_quotes['quotes'])];
    }
}
