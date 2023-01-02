package com.repository;

import com.domain.Blog;
import com.domain.Goal;
import com.domain.TaxUser;
import com.domain.taxLiability;

import java.util.List;

public interface GoalRepo {

    public List<Goal> getAll();

    public Goal create(Goal goal);

    public Goal get(int id);

    public Goal update(Goal goal);

    public void delete(int id);
}
